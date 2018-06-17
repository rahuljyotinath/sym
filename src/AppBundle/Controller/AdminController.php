<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("admin")
 * Class AdminController
 * @package AppBundle\Controller
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_homepage")
     * @param Request $request Request
     * @return Response
     */
    public function homepageAction(Request $request)
    {
        return $this->render('app/admin/dashboard.html.twig', []);
    }
}
