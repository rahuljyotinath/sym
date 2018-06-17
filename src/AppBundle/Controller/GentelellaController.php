<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GentelellaController
 * @package AppBundle\Controller
 */
class GentelellaController extends Controller
{
    /**
     * @Route("gentelella/{page}", name="app_gentelella", defaults={"page": "index"})
     * @param Request $request
     * @param string $page
     * @return Response
     */
    public function gentelellaAction(Request $request, $page)
    {
        $templateName = basename(sprintf('gentelella/%s.html.twig', $page));
        if ($templateName !== sprintf('%s.html.twig', $page)) {
            throw $this->createNotFoundException('Page not found');
        }
        if (!$this->get('templating')->exists(sprintf('gentelella/%s', $templateName))) {
            throw $this->createNotFoundException(
                sprintf(
                    'Page "%s" not found',
                    $page
                )
            );
        }

        return $this->render(sprintf('gentelella/%s.html.twig', $page));
    }

    /**
     * @Route("/admin", name="app_homepage")
     * @param Request $request Request
     * @return Response
     */
    public function homepageAction(Request $request)
    {
        return $this->render('app/pages/dashboard.html.twig', []);
    }
}
