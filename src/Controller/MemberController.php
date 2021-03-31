<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/nutritionist")
 */
class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="listMember")
     */
    public function index(): Response
    {
        return $this->render('member/list.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }
}
