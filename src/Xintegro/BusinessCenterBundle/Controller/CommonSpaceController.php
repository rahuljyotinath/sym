<?php

namespace Xintegro\BusinessCenterBundle\Controller;

use AppBundle\Database\Manager as DatabaseManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use JMS\SecurityExtraBundle\Annotation\Secure;
use JMS\DiExtraBundle\Annotation\Inject;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\CommonSpace;

/**
 * Class CommonSpaceController
 * @Route("/business/common")
 * @package Pferdiathek\BackendBundle\Controller
 */
class CommonSpaceController extends Controller
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
     * @Inject("app.database.manager")
     * @var DatabaseManager
     */
    private $dbM;

    /**
     * @Route("/list", name="app_common_list")
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $spaces = $em->getRepository('AppBundle:CommonSpace')->findAll();
        return $this->render('@XintegroBusinessCenter/common_space/index.html.twig', array(
            'spaces' => $spaces,
            'page_title' => 'Common Space Management'
        ));
    }

    /**
     * @Route("/new", name="app_common_new")
     * @param Request $request
     * @return Response
     */
    public function newAction(Request $request)
    {
        $commonspace = new CommonSpace();
        $form = $this->createForm('AppBundle\Form\CommonSpaceType', $commonspace)
                ->add('center');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commonspace);
            $em->flush();
            return $this->redirectToRoute('app_common_show', array('id' => $commonspace->getId()));
        }
        return $this->render('XintegroBusinessCenterBundle:center:new.html.twig', array(
            'commonspace' => $commonspace,
            'form' => $form->createView(),
            'page_title' => 'Common Space Management'
        ));
    }

    /** 
     * @Route("/{id}/show", name="app_common_show")
     */
    public function showAction($id)
    {
        $entity = $this->dbM->repository()->commonspace()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Business Common Space entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        return $this->render('XintegroBusinessCenterBundle:common_space:show.html.twig', array(
            'commonspace' => $entity,
            'page_title' => 'Common Space Management'
        ));
    }

    /**
     * @Route("/{id}/edit", name="app_common_edit")
     */
    public function editAction(Request $request, $id)
    {
        $entity = $this->dbM->repository()->commonspace()->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Business Center entity.');
        }

        
        $commonspace = $entity;
        
        $editForm = $this->createForm(Form\CommonSpaceType::class, $commonspace)
            ->add('center')
            ->add('update', SubmitType::class, array('label' => 'Update Common Space', 'attr' => ['class' => 'btn-success']))
       ;

        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('app_common_list', array('id' => $commonspace->getId()));
        }
        return $this->render('XintegroBusinessCenterBundle:common_space:edit.html.twig', array(
            'commonspace' => $commonspace,
            'edit_form' => $editForm->createView(),
            'page_title' => 'Common Space Management'
        ));
    }

    /**
     * @Route("/{id}/delete", name="app_common_delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $this->get('session')->getFlashBag()->add('error', 'Delete is currently deactivated!');
        return $this->redirect($this->generateUrl('app_common_list'));
    }

    /**
     * @param integer $id
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', HiddenType::class)
            ->add('update', FormType\SubmitType::class, [
                    'label' => 'Delete Common Space',
                    'attr' => [
                        'class' => 'btn-danger',
                        'onclick' => 'return confirm(\'Really Delete?\')'
                    ]
                ]
            )
            ->getForm();
    }
}
