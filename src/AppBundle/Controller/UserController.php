<?php

/**
 * all code by me
 *
 * @copyright  Stefan H.G. Buchhofer
 * @version    Release: 1.0.0
 * @link       www.ilenvo-media.de
 * @email      ilenvo@me.com
 * @year       2016
 *
 */

namespace AppBundle\Controller;

use AppBundle\Database\Manager as DatabaseManager;
use AppBundle\Entity\User;
use AppBundle\Entity\UserHistory;
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

/**
 * Class UserController
 * @Route("/app/user")
 * @package Pferdiathek\BackendBundle\Controller
 */
class UserController extends Controller
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
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/list", name="app_user_list")
     * @Template()
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request): array
    {
        $filterBuilder = $this->dbM->repository()->user()->createQueryBuilder('a');
        $form = $this->formFactory->create(Form\UserFilterType::class);

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

        return ['form' => $form->createView(), 'pagination' => $pagination];
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/{id}/show", name="app_user_show")
     * @Template()
     */
    public function showAction($id)
    {
        $entity = $this->dbM->repository()->user()->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView()
        );
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     *
     * @Route("/new", name="app_user_new")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $roles=[];
        foreach (array_keys($this->getParameter('security.role_hierarchy.roles')) as $role)
            $roles[$role]=$role;
        $form = $this->createForm('AppBundle\Form\UserType', $user)
            ->add('companies')
            ->add('Roles', ChoiceType::class, [
                    'choices' => $roles,
                    'multiple' => true,
                    'expanded' => true,
                    'label' => 'Roles (ROLE_USER added automatically)',
                    'required' => false
                ]
            )
        ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_user_show', array('id' => $user->getId()));
        }
        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'page_title' => 'User Management'
        ));
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/{id}/edit", name="app_user_edit")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $entity = $this->dbM->repository()->user()->find($id);
        /**
         * @var User $entityHistory
         */
        $entityHistory = clone $entity;

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(Form\UserType::class, $entity, ['roles' => $this->getUserRoleHierarchy()]);
        $deleteForm = $this->createDeleteForm($id);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $historyDbEntity = new UserHistory();
            $mapper = new \AppBundle\Rest\Api\Mapper\Index();
            $historyDbEntity = $mapper->modelInToModelOut($entityHistory, $historyDbEntity);
            $em = $this->dbM->entityManager();
            $em->persist($historyDbEntity);
            $em->flush($historyDbEntity);

            dump($entityHistory);
            $em = $this->dbM->entityManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'User Updated');
            return $this->redirect($this->generateUrl('app_user_edit', array('id' => $id)));
        } else {
            foreach ($editForm->getErrors() as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }

        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Secure(roles="ROLE_SUPER_ADMIN")
     * @Route("/{id}/delete", name="app_user_delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $this->get('session')->getFlashBag()->add('error', 'Delete is currently deactivated!');

        return $this->redirect($this->generateUrl('app_user_list'));
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
                    'label' => 'Delete User',
                    'attr' => [
                        'class' => 'btn-danger',
                        'onclick' => 'return confirm(\'Really Delete?\')'
                    ]
                ]
            )
            ->getForm();
    }

    /**
     * @return array
     */
    private function getUserRoleHierarchy()
    {
        $roles = $this->container->getParameter('security.role_hierarchy.roles');
        return $roles ? $roles : array();
    }
}
