<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentationComponentsController extends AbstractController
{
    /**
     * @Route("/documentation/test", name="doc_components_alert")
     */
    public function alert(): Response
    {
        return $this->render('documentation/components/alert.html.twig');
    }
}
