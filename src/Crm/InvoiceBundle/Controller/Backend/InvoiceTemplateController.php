<?php

namespace Crm\InvoiceBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use JMS\DiExtraBundle\Annotation\Inject;
use Crm\InvoiceBundle\Form\Backend\Invoice\InvoiceTemplateFilterType;
use Crm\InvoiceBundle\Form\Backend\Invoice\TemplatesType;

/**
 * Class InvoiceTemplateController
 * @package Crm\InvoiceBundle\Controller\Backend
 * @Route("/crm/template")
 */
class InvoiceTemplateController extends Controller
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
	 * @Inject("app.database.manager")
	 * @var Manager
	 */
	private $adbM;
	
	/**
	 * @Secure(roles="ROLE_SUPER_ADMIN")
	 * @Route("/list", name="crm_invoice_template_list")
	 * @param Request $request
	 * @return Response
	 */
	public function listAction(Request $request)
	{
		$filterBuilder = $this->dbM->repository()->templates()->createQueryBuilder('a');
		$companies  = $this->adbM->repository()->company()->getCompanyListByNameAndId();
		$companies = array_column($companies, 'name','id');	
		$form = $this->formFactory->create(InvoiceTemplateFilterType::class,$companies);
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
		return $this->render('CrmInvoiceBundle:Backend:templatelist.html.twig',
            ['form' => $form->createView(), 'pagination' => $pagination]);
	}
	
	/**
	 * @Secure(roles="ROLE_SUPER_ADMIN")
	 * @Route("/add", name="crm_invoice_template_add")
	 * @param Request $request
	 * @return Response
	 */
	public function addAction(Request $request)
	{
		$newForm = $this->createForm(TemplatesType::class);
		$newForm->handleRequest($request);
		if ($newForm->isValid() && $newForm->isSubmitted()) {
			$templateEntity = $newForm->getData();
			$this->dbM->entityManager()->persist($templateEntity);
			$this->dbM->entityManager()->flush();
			$this->get('session')->getFlashBag()->add('success', 'Template created');
			return $this->redirect($this->generateUrl('crm_invoice_template_list'));
		}
		
		return $this->render(
				'@CrmInvoice/Backend/newtemplate.html.twig',
				['new_form' => $newForm->createView()]
		);
	}
	
	/**
	 * @Secure(roles="ROLE_SUPER_ADMIN")
	 * @Route("/edit/{id}", name="crm_invoice_template_edit")
	 * @param Request $request
	 * @return Response
	 */
	public function editAction(Request $request, $id)
	{
	 	$entity = $this->dbM->repository()->templates()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find template.');
        }
        $companyId = $entity->getCompany()->getId();
        $editForm = $this->createForm(TemplatesType::class, $entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid() && $editForm->isSubmitted()) {
        	$templateEntity = $editForm->getData();
			$this->dbM->entityManager()->persist($templateEntity);
			$this->dbM->entityManager()->flush();
			$this->get('session')->getFlashBag()->add('success', 'Template edited');
			return $this->redirect($this->generateUrl('crm_invoice_template_list'));
        }
        return $this->render(
        		'@CrmInvoice/Backend/edittemplate.html.twig',
        		['entity' => $entity, 'edit_form' => $editForm->createView()]
        );
	}
	
	/**
	 * @Secure(roles="ROLE_SUPER_ADMIN")
	 * @Route("/show/{id}", name="crm_invoice_template_show")
	 * @param Request $request
	 * @return Response
	 */
	public function shpwAction(Request $request, $id)
	{
		$entity = $this->dbM->repository()->templates()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find template.');
        }

        return $response = $this->render('CrmInvoiceBundle:Backend:showtemplate.html.twig',array('template'=>$entity));
	}
}
