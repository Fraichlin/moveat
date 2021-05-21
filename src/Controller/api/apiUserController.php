<?php

namespace App\Controller\api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class apiUserController extends AbstractController
{
    /**
     * @Route("/apiLogin", name="apiLogin")
     */
    public function login(): Response
    {
        return $this->render('api/api_user/index.html.twig', [
            'controller_name' => 'apiUserController',
        ]);
    }
}
