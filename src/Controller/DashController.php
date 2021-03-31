<?php

namespace App\Controller;

use App\Entity\Administrateur;
use App\Repository\AdministrateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashController extends AbstractController
{
    /**
     * @Route("/dash", name="dash")
     */
    public function index(): Response
    {
        return $this->render('dash/index.html.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('dash/login.html.twig');
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function profile(AdministrateurRepository $repository): Response
    {
        $admin = $repository->find(1);
        return $this->render('dash/profile.html.twig', [
            'nom' => $admin->getNom(),
            'prenom'=>$admin->getPrenom(),
            'email'=>$admin->getEmail(),
            'login'=>$admin->getLogin(),
            'password'=>$admin->getPassword()
        ]);

    }

    /**
     * @Route("/updateProfile", name="updateProfile")
     */
    public function updateProfile(AdministrateurRepository $repository,Request $request): Response
    {
        $admin = $repository->find(1);
        if($admin->getPassword() == $request->get('oldPassword') && $request->get('newPassword') == $request->get('newPasswordConfirm')){
            $admin->setNom($request->get('nom'));
            $admin->setPrenom($request->get('prenom'));
            $admin->setEmail($request->get('email'));
            $admin->setLogin($request->get('login'));
            $admin->setPassword($request->get('newPassword'));
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->render('dash/profile.html.twig', [
                'nom' => $admin->getNom(),
                'prenom'=>$admin->getPrenom(),
                'email'=>$admin->getEmail(),
                'login'=>$admin->getLogin(),
                'password'=>$admin->getPassword()
            ]);
        }
        return $this->redirectToRoute('profile');
    }

    /**
     * @Route("/connect", name="connect")
     */
     public function connect(Request $request,AdministrateurRepository $repository){
         $login = $request->get('login');
         $password = $request->get('password');
         $admin = $repository->find(1);
          if($login == $admin->getLogin() && $password == $admin->getPassword())
          return $this->render('dash/index.html.twig');

         return $this->render('dash/login.html.twig');
     }
}
