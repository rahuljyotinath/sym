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
use AppBundle\Entity\PrivateSpace;

/**
 * Class PrivateSpaceController
 * @Route("/business/private")
 * @package Pferdiathek\BackendBundle\Controller
 */
class PrivateSpaceController extends Controller
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
     * @Route("/list", name="app_private_list")
     * @Template()
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $spaces = $em->getRepository('AppBundle:PrivateSpace')->findAll();
        return $this->render('privatespace/index.html.twig', array(
            'spaces' => $spaces,
            'page_title' => 'Private Space Management'
        ));
    }

    /**
     * @Route("/new", name="app_private_new")
     * @Template()
     * @param Request $request
     * @return Response
     */
    public function newAction(Request $request)
    {
        $privatespace = new PrivateSpace();
        $form = $this->createForm('AppBundle\Form\PrivateSpaceType', $privatespace)
                ->add('center');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($privatespace);
            $em->flush();
            return $this->redirectToRoute('app_private_show', array('id' => $privatespace->getId()));
        }
        return $this->render('privatespace/new.html.twig', array(
            'privatespace' => $privatespace,
            'form' => $form->createView(),
            'page_title' => 'Private Space Management'
        ));
    }

    /** 
     * @Route("/{id}/show", name="app_private_show")
     * @Template()
     */
    public function showAction($id)
    {
        $entity = $this->dbM->repository()->privatespace()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Business Private Space entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        return $this->render('privatespace/show.html.twig', array(
            'privatespace' => $entity,
            'page_title' => 'Private Space Management'
        ));
    }

    /**
     * @Route("/{id}/edit", name="app_private_edit")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $entity = $this->dbM->repository()->privatespace()->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Business Center entity.');
        }
        
        $privatespace = $entity;
        
        $editForm = $this->createForm('AppBundle\Form\PrivateSpaceType', $privatespace)
            ->add('center')
            ->add('update', SubmitType::class, array('label' => 'Update Private Space', 'attr' => ['class' => 'btn-success']));

        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('app_private_list', array('id' => $privatespace->getId()));
        }
        return $this->render('privatespace/edit.html.twig', array(
            'privatespace' => $privatespace,
            'edit_form' => $editForm->createView(),
            'page_title' => 'Private Space Management'
        ));
    }

    /**
     * @Route("/{id}/delete", name="app_private_delete")
     * @Template()
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $this->get('session')->getFlashBag()->add('error', 'Delete is currently deactivated!');
        return $this->redirect($this->generateUrl('app_private_list'));
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
                    'label' => 'Delete Private Space',
                    'attr' => [
                        'class' => 'btn-danger',
                        'onclick' => 'return confirm(\'Really Delete?\')'
                    ]
                ]
            )
            ->getForm();
    }
}
