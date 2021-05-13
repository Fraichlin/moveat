<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalenderController extends AbstractController
{
    /**
     * @Route("/calender", name="calender")
     */
    public function index(): Response
    {
        return $this->render('calender/index.html.twig', [
            'controller_name' => 'CalenderController',
        ]);
    }
}
