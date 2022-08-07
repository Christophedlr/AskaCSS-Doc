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

    /**
     * @Route("/documentation/form", name="doc_components_form")
     */
    public function form(): Response
    {
        return $this->render('documentation/components/form.html.twig');
    }

    /**
     * @Route("/documentation/modal", name="doc_components_modal")
     */
    public function modal(): Response
    {
        return $this->render('documentation/components/modal.html.twig');
    }

    /**
     * @Route("/documentation/navbar", name="doc_components_navbar")
     */
    public function navbar(): Response
    {
        return $this->render('documentation/components/navbar.html.twig');
    }

    /**
     * @Route("/documentation/pagination", name="doc_components_pagination")
     */
    public function pagination(): Response
    {
        return $this->render('documentation/components/pagination.html.twig');
    }
}
