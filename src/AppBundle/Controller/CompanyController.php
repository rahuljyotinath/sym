<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Company;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
/**
 * Class CompanyController.
 * @Route("admin/company")
 */
class CompanyController extends Controller
{
    /**
     * @Route("/", name="company_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $companies = $em->getRepository('AppBundle:Company')->findAll();
        return $this->render('company/index.html.twig', array(
            'companies' => $companies,
            'page_title' => 'Company Management'
        ));
    }

    /**
     * @Route("/new", name="company_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $company = new Company();
        $form = $this->createForm('AppBundle\Form\CompanyType', $company);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            return $this->redirectToRoute('company_show', array('id' => $company->getId()));
        }
        return $this->render('company/new.html.twig', array(
            'company' => $company,
            'form' => $form->createView(),
            'page_title' => 'Company Management'
        ));
    }

    /**
     * @Route("/{id}", name="company_show")
     * @Method("GET")
     */
    public function showAction(Company $company)
    {
        $deleteForm = $this->createDeleteForm($company);
        return $this->render('company/show.html.twig', array(
            'company' => $company,
            'delete_form' => $deleteForm->createView(),
            'page_title' => 'Company Management'
        ));
    }

    /**
     * @Route("/{id}/edit", name="company_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Company $company)
    {
        $deleteForm = $this->createDeleteForm($company);
        $editForm = $this->createForm('AppBundle\Form\CompanyType', $company);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('company_edit', array('id' => $company->getId()));
        }
        return $this->render('company/edit.html.twig', array(
            'company' => $company,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'page_title' => 'Company Management'
        ));
    }

    /**
     * @Route("/{id}", name="company_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Company $company)
    {
        $form = $this->createDeleteForm($company);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($company);
            $em->flush();
        }
        return $this->redirectToRoute('company_index');
    }

    /**
     * @param Company $company The company entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Company $company)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('company_delete', array('id' => $company->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
