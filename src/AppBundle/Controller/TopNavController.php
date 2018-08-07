<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class TopNavController
 * @package AppBundle\Controller
 */
class TopNavController extends Controller
{
    /**
     * @Route("/profile", name="app_profile")
     * @param Request $request
     * @return Response
     */
    public function profileAction(Request $request)
    {
    	$userObj =$this->container->get('security.token_storage')->getToken()->getUser();
    	if(is_object($userObj)){
    		$em = $this->getDoctrine()->getManager();
    		$mappedCompanies = $userObj->getCompanies();
    		$companies = $em->getRepository('AppBundle:Company')->findAll();
        	return $this->render('app/pages/profile.html.twig', array('companies' => $companies,'mappedCompnaies'=>$mappedCompanies));
    	}else{
    		$url = $this->generateUrl('fos_user_security_login');
    		return new RedirectResponse($url);
    	}
    }
    
    /**
     * @Route("/mapping-companies", name="map_companies")
     * @param Request $request
     * @return Response
     */
    public function mapCompaniesAction(Request $request)
    {
    	$userObj =$this->container->get('security.token_storage')->getToken()->getUser();
    	if(is_object($userObj)){
    		$userId = $userObj->getId();
    		$companyArray = $request->get('company');
    		$em = $this->getDoctrine()->getManager();
    		$mappedCompanies = $userObj->getCompanies();
    		$companies = $em->getRepository('AppBundle:Company')->findById($companyArray);
    		if(count($mappedCompanies)>0){
	    		foreach($mappedCompanies as $company){
	    			$userObj->removeCompany($company);
	    			$em->persist($userObj);
	    			$em->flush();
	    		}
    		}
    		if(count($companies)>0){
	    		$userObj->setCompanies($companies);
		    	$em->persist($userObj);
		    	$em->flush();
    		}
	    	$url = $this->generateUrl('app_profile');
	    	return new RedirectResponse($url);
    	}else{
    		$url = $this->generateUrl('fos_user_security_login');
    		return new RedirectResponse($url);
    	}
    }
}
