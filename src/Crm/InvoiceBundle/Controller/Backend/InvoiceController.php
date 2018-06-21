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
use Crm\InvoiceBundle\Form\Backend\Invoice\InvoiceFilterType;
use Crm\InvoiceBundle\Form\Backend\Invoice\InvoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

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

        return $this->render('CrmInvoiceBundle:Backend:list.html.twig', ['form' => $form->createView(), 'pagination' => $pagination]);
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
     * @Route("/{id}/edit", name="crm_invoice_invoice_edit")
     * @param Request $request
     * @param string $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function editAction(Request $request, $id)
    {
        $entity = $this->paymentDbM->repository()->invoice()->find($id);
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

            $this->paymentDbM->getObjectManager()->persist($invoiceEntity);
            $this->paymentDbM->getObjectManager()->flush();

            $this->get('session')->getFlashBag()->add('success', 'Invoice updated');
            return $this->redirect($this->generateUrl('shop_payment_invoice_list'));
        }

        return $this->render(
            '@CrmInvoice/Backend/list.html.twig',
            ['entity' => $entity, 'edit_form' => $editForm->createView()]
        );
    }
}
