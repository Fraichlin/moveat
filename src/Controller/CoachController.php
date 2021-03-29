<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\CoachType;
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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Vich\UploaderBundle\Form\Type\VichFileType;

/**
 * Class CoachController
 * @package App\Controller
 * @Route("/Coach")
 */
class CoachController extends AbstractController
{
    /**
     * @Route("/home", name="homeCoach")
     */
    public function home(): Response
    {
        return $this->render('coach/home.html.twig');
    }
    /**
     * @Route("/delete/{id}", name="deleteProfileCoach")
     */
    public function delete($id,UserRepository $repository): Response
    {
        $coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        $this->addFlash('success','Votre compte a été supprimé avec succès');
        return $this->render("index.html.twig");
    }
    /**
     * @return Response
     * @Route("/updateProfile/{id}",name="updateProfileCoach")
     */
    public function updateProfil($id, UserRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $coach = $repository->find($id);
        $form = $this->createForm(CoachType::class,$coach);
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
        $form->add('Enregistrer',SubmitType::class);
        $temp_password = $coach->getPassword();
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            if($coach->getPassword()=='12345678'){
                $coach->setPassword($temp_password);
            }
            else{
                $hash = $encoder->encodePassword($coach,$coach->getPassword());
                $coach->setPassword($hash);
            }
            $coach->setTaille(null);
            $coach->setPoids(null);
            $coach->setUpdatedAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Votre compte a été modifié avec succès');
            return $this->redirectToRoute('homeCoach');
        }

        return $this->render('coach/updateProfile.html.twig',[
            'form' => $form->createView(),
            'user'=>$coach
        ]);
    }
}
