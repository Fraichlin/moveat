<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckController extends AbstractController
{
    /**
     * @Route("/Member/check", name="check")
     */
    public function index(): Response
    {
        return $this->render('check/index.html.twig', [
            'controller_name' => 'CheckController',
        ]);
    }
}
