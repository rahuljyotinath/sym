<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
/**
 * Class SidebarController
 * @package AppBundle\Controller
 */
class SidebarController extends Controller
{
    /**
     * @Route("/", name="app_dashboard")
     * @param Request $request Request
     * @return Response
     */
    public function dashboardAction(Request $request)
    {
    	$userObj =$this->container->get('security.token_storage')->getToken()->getUser();
    	if(is_object($userObj)){
    		return $this->render('app/pages/dashboard.html.twig', []);
    	}else{
    		$url = $this->generateUrl('fos_user_security_login');
    		return new RedirectResponse($url);
    	}
    }

    /**
     * @Route("/calendar", name="app_calendar")
     * @param Request $request
     * @return Response
     */
    public function calendarAction(Request $request)
    {
        return $this->render('app/pages/calendar.html.twig', []);
    }

    /**
     * @Route("/contacts", name="app_contacts")
     * @param Request $request
     * @return Response
     */
    public function contactsAction(Request $request)
    {
        return $this->render('app/pages/contacts.html.twig', []);
    }
}
