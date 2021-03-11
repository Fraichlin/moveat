<?php

namespace App\Controller;

use App\Entity\Administrateur;
use App\Entity\Coach;
use App\Form\CoachType;
use App\Repository\AdministrateurRepository;
use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * Class CoachController
 * @package App\Controller
 * @Route("/Coach")
 */
class CoachController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscriptionCoach")
     */
    public function inscription(Request $request,CoachRepository $repository,
                                AdministrateurRepository $repository2,
                                UserPasswordEncoderInterface $encoder): Response
    {
        $coach = new Coach();
        $form = $this->createForm(CoachType::class,$coach);
        $form->add('Inscription',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            $hash = $encoder->encodePassword($coach,$coach->getPassword());
            $coach->setPassword($hash);
            $photo = $form->get('photo')->getData();
            $fichier = $form->get('justificatif')->getData();
            if ($photo && $fichier) {
                $nomPhoto = 'photoCoach'.'-'.uniqid().'.'.$photo->guessExtension();
                $nomFichier = 'fichierCoach'.'-'.uniqid().'.'.$fichier->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('repertoire_img'),
                        $nomPhoto
                    );
                    $fichier->move(
                        $this->getParameter('repertoire_file'),
                        $nomFichier
                    );
                } catch (FileException $e) {

                }
                $coach->setPhoto($nomPhoto);
                $coach->setJustificatif($nomFichier);
            }
            $coach->setStatut(0);
            $coach->setDateInscription(new \DateTime());
            $coach->setIdAdmin($repository2->find(1));

            $em = $this->getDoctrine()->getManager();

            $em->persist($coach);
            $em->flush();
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
            return $this->redirectToRoute('loginCoach');
        }

        return $this->render('coach/inscription.html.twig',[
            'form' => $form->createView()
        ]);
    }
    /**
     * @return Response
     * @Route("/home",name="homeCoach")
     */
    public function home(){
        return $this->render("coach/home.html.twig");
    }
    /**
     * @return Response
     * @Route("/login",name="loginCoach")
     */
    public function login(){
        return $this->render("coach/login.html.twig");
    }

    /**
     * @return Response
     * @Route("/logout",name="logoutCoach")
     */
    public function logout(){
    }
    /**
     * @return Response
     * @Route("/profil",name="profilCoach")
     */
    public function profil(){

    }

    /**
     * @return Response
     * @Route("/updateProfil/{id}",name="updateProfilCoach")
     */
    public function updateProfil($id, CoachRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $coach = $repository->find($id);
        $form = $this->createForm(CoachType::class,$coach);
        $form->add('Enregistrer',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($coach,$coach->getPassword());
            $coach->setPassword($hash);
            $photo = $form->get('photo')->getData();
            $justificatif = $form->get('justificatif')->getData();
            if ($photo && $justificatif) {
                $nomPhoto = 'photoCoach'.'-'.uniqid().'.'.$photo->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('repertoire_img'),
                        $nomPhoto
                    );
                } catch (FileException $e) {

                }
                $coach->setJustificatif($coach->getJustificatif());
                $coach->setPhoto($nomPhoto);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('homeCoach');
        }
        return $this->render('coach/profil.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
