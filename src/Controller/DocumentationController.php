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
}
