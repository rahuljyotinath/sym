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
}
