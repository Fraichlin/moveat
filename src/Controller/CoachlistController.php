<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachlistController extends AbstractController
{
    /**
     * @Route("/coachlist", name="coachlist")
     */
    public function index(): Response
    {
        return $this->render('coachlist/coachlist.html.twig', [
            'controller_name' => 'CoachlistController',
        ]);
    }
}
