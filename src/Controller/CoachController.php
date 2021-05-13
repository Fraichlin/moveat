<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Coach;
use App\Entity\Nutrition;
use App\Entity\NutritionalProgram;
use App\Form\AdminType;
use App\Form\Appointment1Type;
use App\Form\CoachType;
use App\Form\MemberType;
use App\Form\NutritionalProgramType;
use App\Form\UserType;
use App\Repository\AppointmentRepository;
use App\Repository\MembreRepository;
use App\Repository\NutritionalProgramRepository;
use App\Repository\NutritionRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
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
    public function home(NutritionalProgramRepository $repository): Response
    {
        return $this->render('coach/home.html.twig',[
            'programme'=>$repository->findAll()
        ]);
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
        return $this->render("coach/home.html.twig");
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
    /**
     * @return Response
     * @Route("/profile",name="profileCoach")
     */
    public function profileAdmin(UserRepository $repository,Request $request,
                                 UserPasswordEncoderInterface $encoder){
        return $this->render('coach/profilCoach.html.twig');
    }

    /**
     * @Route("/Program/new", name="programme_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $programme = new NutritionalProgram();
        $form = $this->createForm(NutritionalProgramType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($programme);
            $entityManager->flush();

            return $this->redirectToRoute('homeCoach');
        }

        return $this->render('coach/addProgram.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Program/{id}", name="programme_show", methods={"GET"})
     */
    public function show(NutritionalProgramRepository $repository,$id): Response
    {
        $programme = $repository->find($id);
        return $this->render('coach/showProgram.html.twig', [
            'programme' => $programme,
        ]);
    }



    /**
     * @Route("/Program/{id}/edit", name="programme_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, NutritionalProgramRepository $repository,$id): Response
    {
        $programme = $repository->find($id);
        $form = $this->createForm(NutritionalProgramType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('homeCoach');
        }

        return $this->render('coach/editProgram.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Program/{id}", name="programme_delete", methods={"DELETE"})
     */
    public function deleteProgram(Request $request, NutritionalProgramRepository $repository,$id): Response
    {
        $programme = $repository->find($id);
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('homeCoach');
    }

    /**
     * @Route("/appointment/list", name="listRdv", methods={"GET"})
     */
    public function listRdv(AppointmentRepository $appointmentRepository): Response
    {
        return $this->render('coach/listrdv.html.twig', [
            'appointments' => $appointmentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/appointment/{id}", name="appointment_show", methods={"GET"})
     */
    public function showRdv(Appointment $appointment): Response
    {
        return $this->render('coach/showRdv.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * @Route("/appointment/{id}/edit", name="appointment_edit", methods={"GET","POST"})
     */
    public function editRdv(Request $request, Appointment $appointment): Response
    {
        $form = $this->createForm(Appointment1Type::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listRdv');
        }

        return $this->render('coach/editRdv.html.twig', [
            'appointment' => $appointment,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("appointment/{id}", name="appointment_delete", methods={"DELETE"})
     */
    public function deleteRdv(Request $request, Appointment $appointment): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($appointment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('listRdv');
    }


}
