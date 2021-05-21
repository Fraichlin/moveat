<?php

namespace App\Controller\api;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @package App\Controller\api
 * @Route("/Api")
 */
class apiCoachController extends AbstractController
{
    private  $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/registerCoach", name="apiRegisterCoach")
     */
    public function registerCoach(Request $request, NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $coach = new User();
        $coach->setEmail($request->get('email'));
        $coach->setUsername($request->get('username'));
        $coach->setNom($request->get('nom'));
        $coach->setPrenom($request->get('prenom'));
        $coach->setSexe($request->get('sexe'));
        $coach->setAdresse($request->get('adresse'));
        $coach->setTelephone($request->get('telephone'));
        $coach->setSpecialite($request->get('specialite'));
        $coach->setPhoto($request->get('photo'));
        $coach->setJustificatif("defaultPdf.pdf");
        $coach->setRoles(["ROLE_COACH"]);
        $coach->setStatut("nonactived");
        $coach->setDateInscription(new \DateTime());
        $hash = $encoder->encodePassword($coach,$request->get('password'));
        $coach->setPassword($hash);
        $em->persist($coach);
        $em->flush();
        $jsonContent = $normalizer->normalize($coach,'json',['groups'=>'post:read']);
        // generate a signed url and email it to the user
//        $this->emailVerifier->sendEmailConfirmation('app_verify_email_member', $coach,
//            (new TemplatedEmail())
//                ->from(new Address('noreply@moveat.com', 'MovEat'))
//                ->to($coach->getEmail())
//                ->subject('Veuillez confirmer votre adresse mail')
//                ->htmlTemplate('registration/confirmation_email.html.twig')
//        );

        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/updateCoach", name="apiUpdateCoach")
     */
    public function updateMember(Request $request, NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder,UserRepository $repository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $member = $repository->findOneBy(['email'=>$request->get('email')]);
        $member->setEmail($request->get('email'));
        $member->setUsername($request->get('username'));
        $member->setNom($request->get('nom'));
        $member->setPrenom($request->get('prenom'));
        $member->setAdresse($request->get('adresse'));
        $member->setTelephone($request->get('tel'));
        $member->setPhoto($request->get('photo'));
        $member->setUpdatedAt(new \DateTime());
        if($request->get('password') != "none"){
            $hash = $encoder->encodePassword($member,$request->get('password'));
            $member->setPassword("bonjour");
        }
        $em->persist($member);
        $em->flush();
        $jsonContent = $normalizer->normalize($member,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }
}
