<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TeleconsultationController extends AbstractController
{
    /**
     * @Route("/aa")
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
     * @Route ("/teleconsultation", name="teleconsultation")
     */
    function Add(Request $request){
        $Appointment=new Appointment();
        $form=$this->createForm(AppointmentType::class,$Appointment);
        $form->add('submit',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Appointment);
            $em->flush();

        }
        return $this->render('teleconsultation/teleconsultation.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @Route("/success",name="success")
     */
    public function success(): Response
    {
        return $this->render('teleconsultation/success.html.twig', [
            'controller_name' => 'TeleconsultationController',
        ]);
    }

    /**
     * @Route("/error",name="error")
     */
    public function error(): Response
    {
        return $this->render('teleconsultation/error.html.twig', [
            'controller_name' => 'TeleconsultationController',
        ]);
    }


    /**
     * @Route("/create-checkout-session",name="checkout")
     */
    public function checkout(): Response
    {
        \Stripe\Stripe::setApiKey('sk_test_51IS3xuEW0KlR6HuIVQ94DfBr8PBsxzflcoIcEarxDhZmKhK9hDrv8xvbgnZ9iQ4QQuTOIc4UPq8pDgpJ93Yhr3A800rTng9H8I');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Teleconsultation',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success',[],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error',[],UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
return new JsonResponse(['id' => $session->id]);
    }

    /**
     * @Route("/list", name="list", methods={"GET"})
     */
    public function list(AppointmentRepository $appointmentRepository): Response
    {
        return $this->render('teleconsultation/appointmentlist.html.twig', [
            'appointments' => $appointmentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/specialites",name="specialites")
     */
    public function specialites(): Response
    {
        return $this->render('teleconsultation/specialites.html.twig', [
            'controller_name' => 'TeleconsultationController',
        ]);
    }




}
