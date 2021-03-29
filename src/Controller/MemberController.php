<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Membre;
use App\Form\CoachType;
use App\Form\MemberType;
use App\Repository\AdministrateurRepository;
use App\Repository\CoachRepository;
use App\Repository\MembreRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
     * @Route("/home", name="homeMember")
     */
    public function home(): Response
    {
        return $this->render('member/home.html.twig');
    }

    /**
     * @Route("/delete/{id}", name="deleteProfileMember")
     */
    public function delete($id,UserRepository $repository): Response
    {
        $member = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();
        $this->addFlash('success','Votre compte a été supprimé avec succès');
        return $this->render("index.html.twig");
    }
    /**
     * @return Response
     * @Route("/updateProfile/{id}",name="updateProfileMember")
     */
    public function updateProfil($id, UserRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $member= $repository->find($id);
        $form = $this->createForm(MemberType::class,$member);
        $form->add('Enregistrer',SubmitType::class);
        $temp_password =$member->getPassword();
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            if($member->getPassword()=='12345678'){
                $member->setPassword($temp_password);
            }
            else{
                $hash = $encoder->encodePassword($member,$member->getPassword());
                $member->setPassword($hash);
            }
            $member->setUpdatedAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Votre compte a été modifié avec succès');
            return $this->redirectToRoute('homeMember');
        }

        return $this->render('member/updateProfile.html.twig',[
            'form' => $form->createView(),
            'user'=>$member
        ]);
    }
}
