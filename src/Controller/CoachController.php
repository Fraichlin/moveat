<?php

namespace App\Controller;

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
        return $this->render('coach/home.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
    /**
     * @Route("/profile/{id}", name="profileCoach")
     */
    public function profile($id): Response
    {
        return $this->render('coach/home.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
    /**
     * @Route("/delete/{id}", name="deleteProfileCoach")
     */
    public function delete($id): Response
    {
        return $this->render('coach/home.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
    /**
     * @return Response
     * @Route("/updateProfile/{id}",name="updateProfileCoach")
     */
    public function updateProfil($id, UserRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $coach = $repository->find($id);
        $form = $this->createForm(UserType::class,$coach);
        $form->add('specialite',ChoiceType::class,[
            'choices' => [
                'Nutritioniste' => 'Nutritioniste',
                'Psychothérapeute' => 'Psychothérapeute',
                'Coach Sportif' => 'Coach Sportif'
            ],
            'attr'=>[
                'value'=>$coach->getSpecialite()
            ]
            ]);

        $form->add('telephone',TextType::class);
        $form->add('adresse',TextType::class);
        $form->add('justificatif',FileType::class,array('data_class' => null));
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
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
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

                }
            }
            $coach->setRoles(["ROLE_COACH"]);
            $coach->setStatut("nonactived");
            $coach->setPhoto($nomPhoto);
            $coach->setJustificatif($nomJustificatif);
            $coach->setDateModification(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('homeCoach');
        }

        return $this->render('coach/updateProfile.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
