<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Membre;
use App\Form\CoachType;
use App\Form\MemberType;
use App\Repository\AdministrateurRepository;
use App\Repository\CoachRepository;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;


/**
 * Class CoachController
 * @package App\Controller
 * @Route("/Member")
 */
class MemberController extends AbstractController
{

    /**
     * @return Response
     * @Route("/home",name="homeMember")
     */
    public function home(){
        return $this->render("member/home.html.twig");
    }

    /**
     * @Route("/inscription", name="inscriptionMembre")
     */
    public function inscription(Request $request,MembreRepository $repository,
                                UserPasswordEncoderInterface $encoder): Response
    {
        $membre = new Membre();
        $form = $this->createForm(MemberType::class,$membre);
        $form->add('Inscription',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            $hash = $encoder->encodePassword($membre,$membre->getPassword());
            $membre->setPassword($hash);
            $photo = $form->get('photo')->getData();

            if ($photo) {
                $nomPhoto = 'photoMembre'.'-'.uniqid().'.'.$photo->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('repertoire_img'),
                        $nomPhoto
                    );
                } catch (FileException $e) {

                }
                $membre->setPhoto($nomPhoto);
            }
            $membre->setDateInscription(new \DateTime());
            $em = $this->getDoctrine()->getManager();

            $em->persist($membre);
            $em->flush();
           return $this->redirectToRoute('loginMember');
        }

        return $this->render('member/inscription.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @return Response
     * @Route("/login",name="loginMember")
     */
    public function login(){
        return $this->render("member/login.html.twig");
    }

    /**
     * @return Response
     * @Route("/logout",name="logoutMember")
     */
    public function logout(){
    }

    /**
     * @return Response
     * @Route("/updateProfil/{id}",name="updateProfilMember")
     */
    public function updateProfil($id, MembreRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $membre = $repository->find($id);
        $form = $this->createForm(MemberType::class,$membre);
        $form->add('Enregistrer',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($membre,$membre->getPassword());
            $membre->setPassword($hash);
            $membre->setUpdatedAt(new \DateTime());
            $photo = $form->get('photo')->getData();
            if ($photo) {
                $nomPhoto = 'photoCoach'.'-'.uniqid().'.'.$photo->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('repertoire_img'),
                        $nomPhoto
                    );
                } catch (FileException $e) {

                }
                $membre->setPhoto($nomPhoto);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('homeMember');
        }
        return $this->render('member/profil.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
