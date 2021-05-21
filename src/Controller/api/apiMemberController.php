<?php

namespace App\Controller\api;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @package App\Controller\api
 * @Route("/Api")
 */
class apiMemberController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/registerMember", name="apiRegisterMember")
     */
    public function registerMember(Request $request, NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $member = new User();
        $member->setEmail($request->get('email'));
        $member->setUsername($request->get('username'));
        $member->setNom($request->get('nom'));
        $member->setPrenom($request->get('prenom'));
        $member->setSexe($request->get('sexe'));
        $member->setTaille($request->get('taille'));
        $member->setPoids($request->get('poids'));
        $member->setPhoto($request->get('photo'));
        $member->setRoles(["ROLE_MEMBER"]);
        $member->setStatut("actived");
        $member->setDateInscription(new \DateTime());
        $hash = $encoder->encodePassword($member,$request->get('password'));
        $member->setPassword($hash);
        $em->persist($member);
        $em->flush();
        $jsonContent = $normalizer->normalize($member,'json',['groups'=>'post:read']);
        // generate a signed url and email it to the user
//        $this->emailVerifier->sendEmailConfirmation('app_verify_email_member', $member,
//            (new TemplatedEmail())
//                ->from(new Address('noreply@moveat.com', 'MovEat'))
//                ->to($member->getEmail())
//                ->subject('Veuillez confirmer votre adresse mail')
//                ->htmlTemplate('registration/confirmation_email.html.twig')
//        );

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/searchMember", name="apiSearchMember")
     */
    public function searchMember(Request $request, NormalizerInterface $normalizer,UserRepository $repository){
        $user = $repository->searchUser($request->get('email'));
        $jsonContent = $normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent),200);
    }

    /**
     * @Route("/updateMember", name="apiUpdateMember")
     */
    public function updateMember(Request $request, NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder,UserRepository $repository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $member = $repository->findOneBy(['email'=>$request->get('email')]);
        $member->setEmail($request->get('email'));
        $member->setUsername($request->get('username'));
        $member->setNom($request->get('nom'));
        $member->setPrenom($request->get('prenom'));
        $member->setTaille($request->get('taille'));
        $member->setPoids($request->get('poids'));
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
