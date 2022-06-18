<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentationController extends AbstractController
{
    /**
     * @Route("/getting-started", name="app_started")
     */
    public function started(): Response
    {
        return $this->render('documentation/started.html.twig', [
        ]);
    }

    /**
     * @Route("/documentation", name="app_documentation")
     */
    public function index(): Response
    {
        return $this->render('documentation/index.html.twig');
    }

    /**
     * @Route("/documentation/root", name="doc_root")
     */
    public function root(): Response
    {
        return $this->render('documentation/root.html.twig');
    }

    /**
     * @Route("/documentation/grid", name="doc_grid")
     */
    public function grid(): Response
    {
        return $this->render('documentation/grid.html.twig');
    }
}
