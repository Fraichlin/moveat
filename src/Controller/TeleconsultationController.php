<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\FormrendezvousType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeleconsultationController extends AbstractController
{
    /**
     * @Route("/teleconsultation", name="teleconsultation")
     */
    public function index(): Response
    {
        return $this->render('teleconsultation/teleconsultation.html.twig', [
            'controller_name' => 'TeleconsultationController',
        ]);
    }
    /**
     * @param Request $request
     * @return Response
     * @Route ("/rendezvous")
     */
    function Add(Request $request){
        $Appointment=new Appointment();
        $form=$this->createForm(FormrendezvousType::class,$Appointment);
        $form->add('submit',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Appointment);
            $em->flush();

        }
        return $this->render('teleconsultation/Add.html.twig',['form'=>$form->createView()]);
}


}
