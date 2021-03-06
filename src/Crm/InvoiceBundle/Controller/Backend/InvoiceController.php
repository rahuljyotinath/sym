<?php

/**
 * all code by me
 *
 * @copyright  Stefan Buchhofer
 * @version    Release: 1.0.0
 * @link       www.ilenvo-media.de
 * @email      ilenvo@me.com
 * @year       2018
 */

namespace Crm\InvoiceBundle\Controller\Backend;

use Crm\InvoiceBundle\Database\Manager;
use Crm\InvoiceBundle\Entity\Invoice;
use Crm\InvoiceBundle\Form\Backend\Invoice\InvoiceFilterType;
use Crm\InvoiceBundle\Form\Backend\Invoice\InvoiceType;
use Crm\InvoiceBundle\Form\Backend\Invoice\SelectRecipientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class InvoiceController
 * @package Crm\InvoiceBundle\Controller\Backend
 * @Route("/crm/invoice")
 */
class InvoiceController extends Controller
{
    /**
     * @Inject("form.factory")
     * @var \Symfony\Component\Form\FormFactory
     */
    private $formFactory;

    /**
     * @Inject("lexik_form_filter.query_builder_updater")
     * @var \Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderUpdater
     */
    private $lexikFilterUpdater;

    /**
     * @Inject("knp_paginator")
     * @var \Knp\Component\Pager\Paginator
     */
    private $knpPaginator;

    /**
     * @Inject("crm_invoice.database.manager")
     * @var Manager
     */
    private $dbM;

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/list", name="crm_invoice_invoice_list")
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $filterBuilder = $this->dbM->repository()->invoice()->createQueryBuilder('a');
        $form = $this->formFactory->create(InvoiceFilterType::class);

        $reset = false;
        if ($request->query->has('filter_action') && $request->query->get('filter_action') == 'reset') {
            $reset = true;
        }
        if ($request->query->has($form->getName()) && !$reset) {
            $form->submit($request->query->get($form->getName()));
            $this->lexikFilterUpdater->addFilterConditions($form, $filterBuilder);
        }
        $query = $filterBuilder->getQuery();
        $pagination = $this->knpPaginator->paginate($query, $request->query->get('page', 1), 10);

        return $this->render('CrmInvoiceBundle:Backend:list.html.twig',
            ['form' => $form->createView(), 'pagination' => $pagination]);
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/select/receipient", name="crm_invoice_invoice_select_receipient")
     * @param Request $request
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMException
     */
    public function selectReceipientAction(Request $request)
    {

        $newForm = $this->createForm(SelectRecipientType::class, null, [
                'users' => $this->dbM->data()->formHelper()->getUserSelectArray(),
                'company' => $this->dbM->data()->formHelper()->getCompanySelectArray(),
                'individuals' => $this->dbM->data()->formHelper()->getIndividialSelectArray()
            ]
        );
        $newForm->handleRequest($request);
        if ($newForm->isValid() && $newForm->isSubmitted()) {
            $selectionForm = $newForm->getData();

            $mappedData = $this->dbM->data()->formHelper()->getReceipientDTO($selectionForm);


            $this->get('session')->getFlashBag()->add('success', 'Invoice stored');
            return $this->redirect($this->generateUrl('crm_invoice_invoice_list'));
        }

        return $this->render(
            '@CrmInvoice/Backend/select_receipient.html.twig',
            ['select_form' => $newForm->createView()]
        );
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/new", name="crm_invoice_invoice_new")
     * @param Request $request
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMException
     */
    public function newAction(Request $request)
    {
        $newForm = $this->createForm(InvoiceType::class);
        $newForm->handleRequest($request);
        if ($newForm->isValid() && $newForm->isSubmitted()) {
            $invoiceEntity = $newForm->getData();
            $this->dbM->entityManager()->persist($invoiceEntity);
            $this->dbM->entityManager()->flush();
            $this->get('session')->getFlashBag()->add('success', 'Invoice stored');
            return $this->redirect($this->generateUrl('crm_invoice_invoice_list'));
        }

        return $this->render(
            '@CrmInvoice/Backend/new.html.twig',
            ['new_form' => $newForm->createView()]
        );
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/edit/{id}", name="crm_invoice_invoice_edit")
     * @param Request $request
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function editAction(Request $request, $id)
    {
        $entity = $this->dbM->repository()->invoice()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find invoice entity.');
        }
        $invoicePositionsStored = new ArrayCollection($entity->getInvoicePositions()->toArray());

        $editForm = $this->createForm(InvoiceType::class, $entity);

        $editForm->handleRequest($request);

        if ($editForm->isValid() && $editForm->isSubmitted()) {
            $invoiceEntity = $editForm->getData();


            foreach ($invoicePositionsStored as $invoicePositionStored) {

                if (!$invoiceEntity->getInvoicePositions()->contains($invoicePositionStored)) {
                    $this->paymentDbM->getObjectManager()->remove($invoicePositionStored);
                }
            }

            foreach ($invoiceEntity->getInvoicePositions() as $invoicePosition) {
                $invoicePosition->setInvoice($invoiceEntity);
            }

            $this->dbM->entityManager()->persist($invoiceEntity);
            $this->dbM->entityManager()->flush();

            //echo get_class($entity); die;
            $this->get('session')->getFlashBag()->add('success', 'Invoice updated');
            return $this->redirect($this->generateUrl('crm_invoice_invoice_list'));
        }

        return $this->render(
            '@CrmInvoice/Backend/editInvoice.html.twig',
            ['entity' => $entity, 'edit_form' => $editForm->createView()]
        );
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/invoice-pdf/{id}", name="crm_invoice_invoice_generate_pdf")
     * @param Request $request
     * @return Response
     */
    public function pdfAction(Request $request, $id)
    {
        $invoiceEntity = $this->dbM->repository()->invoice()->find($id);
        if (!$invoiceEntity) {
            throw $this->createNotFoundException('Unable to find invoice entity.');
        }

        /**
         * @var Invoice $invoiceEntity
         */

        $pdf_path = $this->container->getParameter('pdf_store_path');
        $filepathname = $pdf_path.sha1(time()).'.pdf';
        $snappy = $this->get('knp_snappy.pdf');
        $body = $this->renderView('CrmInvoiceBundle:Backend:invoicePdf.html.twig',array('entity' => $invoiceEntity));
        $snappy->generateFromHtml($body,$filepathname);
        $this->get('session')->getFlashBag()->add('success', 'PDF generated');
        return $this->redirect($this->generateUrl('crm_invoice_invoice_list'));
    }


    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/invoice-confirmation/{id}", name="crm_invoice_invoice_confirmation")
     * @param Request $request
     * @return Response
     */
    public function confirmationAction(Request $request, $id)
    {
        $entity = $this->dbM->repository()->invoice()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find invoice entity.');
        }

        return $response = $this->render('CrmInvoiceBundle:Backend:confirmation.html.twig',array('id'=>$id));

    }
    
    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/invoice-mail/{id}", name="crm_invoice_invoice_mail")
     * @param Request $request
     * @return Response
     */
    public function sendMailAction(Request $request, $id)
    {
        $mailHandler = $this->get('crm_mailer_handler');
        $invoiceEntity = $this->dbM->repository()->invoice()->find($id);
        if (!$invoiceEntity) {
            throw $this->createNotFoundException('Unable to find invoice entity.');
        }
        $pdf_path = $this->container->getParameter('pdf_store_path');
        $filename = sha1(time()).'.pdf';
        $filepathname = $pdf_path.$filename;
        $snappy = $this->get('knp_snappy.pdf');
        $body = $this->renderView('CrmInvoiceBundle:Backend:invoicePdf.html.twig',array('entity' => $invoiceEntity));
        $snappy->generateFromHtml($body,$filepathname);
        $filepathname = realpath($filepathname);
		$templateName = 'Emails/invoice.html.twig';
		$context = array();
		$fromEmail = 'ngupta4@gmail.com';
		$toEmail  = 'nileshkumar.gupta4@gmail.com';
		$senderName = 'Nilesh';
		$send = $this->get('crm_mailer_handler')->sendMessage($templateName, $context, $fromEmail, $toEmail, $senderName, $filepathname, $filename);
        return $this->redirect($this->generateUrl('crm_invoice_invoice_list'));
        
        //Note: In symfony3.3 you must return the or redirect it otherwise email not sent. 
    }
}
