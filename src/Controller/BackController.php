<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    /**
     * @Route("/basic", name="basic")
     */
    public function basictable(): Response
    {
        return $this->render('back/basictable.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }



}
