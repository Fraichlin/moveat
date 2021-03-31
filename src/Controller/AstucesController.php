<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AstucesController extends AbstractController
{
    /**
     * @Route("/astuces", name="astuces")
     */
    public function index(): Response
    {
        return $this->render('astuces/astuces.html.twig', [
            'controller_name' => 'AstucesController',
        ]);
    }
}
