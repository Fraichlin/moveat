<?php

namespace App\Controller;

use App\Repository\CoachRepository;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller
 * @Route("/Admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/home", name="homeAdmin")
     */
    public function home(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @return Response
     * @Route("/login",name="loginAdmin")
     */
    public function login(){
        return $this->render('admin/login.html.twig');
    }

    /**
     * @return Response
     * @Route("/listMember",name="listMember")
     */
    public function listMember(MembreRepository $repository){
        $member = $repository->findAll();
        return $this->render('admin/listMember.html.twig',[
            'members' => $member
        ]);
    }

    /**
     * @return Response
     * @Route("/listCoach",name="listCoach")
     */
    public function listCoach(CoachRepository $repository){
        $coach = $repository->findAll();
        return $this->render('admin/listCoach.html.twig',[
            'coach' => $coach
        ]);
    }




}
