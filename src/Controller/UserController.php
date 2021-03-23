<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Entity\User;
use App\Form\MemberType;
use App\Form\UserType;
use App\Repository\MembreRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/",name="index")
     */
    public function index(){
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->redirectToRoute('index');
    }
    /**
     * @Route("/registerCoach",name="registerCoach")
     */
    public function registerCoach(Request $request,UserRepository $repository,
                                  UserPasswordEncoderInterface $encoder){
        $coach = new User();
        $form = $this->createForm(UserType::class,$coach);
        $form->add('specialite',ChoiceType::class,[
        'choices' => [
            'Nutritioniste' => 'Nutritioniste',
            'Psychothérapeute' => 'Psychothérapeute',
            'Coach Sportif' => 'Coach Sportif'
        ]]);

        $form->add('telephone',TextType::class,[
            'attr'=>[
                'placeholder' => '+216 XX XXX XXX'
            ]
        ]);
        $form->add('adresse',TextType::class,[
            'attr'=>[
                'placeholder' => 'Ariana,zone industrielle'
            ]
        ]);
        $form->add('justificatif',FileType::class, array('data_class' => null));
        $form->add('poids',HiddenType::class,[
            'attr' => [
                'value'=>50
            ]
        ]);
        $form->add('taille',HiddenType::class,[
            'attr' => [
                'value'=>1
            ]
        ]);

        $form->add('Inscription',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            dd($request);
            $hash = $encoder->encodePassword($coach,$coach->getPassword());
            $coach->setPassword($hash);
            $coach->setTaille(null);
            $coach->setPoids(null);
            $photo = $form->get('photo')->getData();
            $justificatif = $form->get('justificatif')->getData();
            if($photo && $justificatif) {
                $nomPhoto = md5(uniqid()).'.'.$photo->guessExtension();
                $nomJustificatif = md5(uniqid()).'.'.$justificatif->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('repertoire_img_coach'),
                        $nomPhoto
                    );
                    $justificatif->move(
                        $this->getParameter('repertoire_file_coach'),
                        $nomJustificatif
                    );
                } catch (FileException $e) {
                    return $e->getMessage();
                }
            }
            $coach->setRoles(["ROLE_COACH"]);
            $coach->setStatut("nonactived");
            $coach->setPhoto($nomPhoto);
            $coach->setJustificatif($nomJustificatif);
            $coach->setDateInscription(new \DateTime());
            $em = $this->getDoctrine()->getManager();

            $em->persist($coach);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }

        return $this->render('coach/register.html.twig',[
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/registerMember",name="registerMember")
     */
    public function registerMember(){
        return $this->render('index.html.twig');
    }

}
