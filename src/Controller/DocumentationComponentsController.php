<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentationComponentsController extends AbstractController
{
    /**
     * @Route("/documentation/alert", name="doc_components_alert")
     */
    public function alert(): Response
    {
        return $this->render('documentation/components/alert.html.twig');
    }

    /**
     * @Route("/documentation/breadcrumb", name="doc_components_breadcrumb")
     */
    public function breadcrumb(): Response
    {
        return $this->render('documentation/components/breadcrumb.html.twig');
    }

    /**
     * @Route("/documentation/card", name="doc_components_card")
     */
    public function card(): Response
    {
        return $this->render('documentation/components/card.html.twig');
    }

    /**
     * @Route("/documentation/dropdown", name="doc_components_dropdown")
     */
    public function dropdown(): Response
    {
        return $this->render('documentation/components/dropdown.html.twig');
    }
}
