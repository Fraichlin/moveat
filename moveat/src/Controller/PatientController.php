<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientType;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    /**
     * @Route("/patient", name="patient")
     */
    public function index(): Response
    {
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/add",name="add")
     */
    public function Add(Request $request )
    {
         $patient=new Patient();
         $form=$this->createForm(PatientType::class,$patient);
        $form->add('submit',SubmitType::class);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($patient);
             $em->flush();
             if ($form->isSubmitted() && $form->isValid()) {
                 $patient = $form->getData();

                 return $this->redirectToRoute('results', [
                     'poid' => $patient->getPoid(),
                     'taille' => $patient->getTaille(),
                     'gender' => $patient->getGender()
                 ]);
             }
         }
        return $this->render('patient/add.html.twig', [
            'form' => $form->createView()
        ]);
    }



}
