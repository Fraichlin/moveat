<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Entity\User;
use App\Form\CoachType;
use App\Form\MemberType;
use App\Form\UserType;
use App\Repository\MembreRepository;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Security\UserLoginAuthenticator;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Vich\UploaderBundle\Form\Type\VichFileType;

class UserController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/",name="index")
     */
    public function index(){
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->render("index.html.twig");
    }

    //******COACH

    /**
     * @Route("/registerCoach",name="registerCoach")
     */
    public function registerCoach(Request $request,UserRepository $repository,
                                  GuardAuthenticatorHandler $guardHandler,
                                  UserPasswordEncoderInterface $encoder,
                                  UserLoginAuthenticator $authenticator
                                                                        ){
        $member = new User();
        $form = $this->createForm(CoachType::class,$member);
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
        $form->add('Inscription',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
//            dd($request);
            $hash = $encoder->encodePassword($member,$member->getPassword());
            $member->setPassword($hash);
            $member->setTaille(null);
            $member->setPoids(null);
            $member->setRoles(["ROLE_COACH"]);
            $member->setStatut("nonactived");
            $member->setDateInscription(new \DateTime());
            $em = $this->getDoctrine()->getManager();

            $em->persist($member);
            $em->flush();
            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email_coach', $member,
                (new TemplatedEmail())
                    ->from(new Address('noreply@moveat.com', 'MovEat'))
                    ->to($member->getEmail())
                    ->subject('Veuillez confirmer votre adresse mail')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email
            $this->addFlash('success', 'Votre compte a été créé avec succès.
            Vous recevrez un mail pour vérifier votre adresse email. Vous recevrez également un mail 
            de la validation ou non de votre demande d\'inscription');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('coach/register.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/verifyCoach/email", name="app_verify_email_coach")
     */
    public function verifyCoachEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());
            return $this->redirectToRoute('app_login');
        }
        $this->addFlash('success', 'Votre adresse mail a été vérifiée.');
        return $this->redirectToRoute('app_login');
    }

    //********MEMBER

    /**
     * @Route("/registerMember",name="registerMember")
     */
    public function registerMember(Request $request,UserRepository $repository,
                                  GuardAuthenticatorHandler $guardHandler,
                                  UserPasswordEncoderInterface $encoder,
                                  UserLoginAuthenticator $authenticator
    ){
        $member = new User();
        $form = $this->createForm(MemberType::class,$member);
        $form->add('Inscription',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
//            dd($request);
            $hash = $encoder->encodePassword($member,$member->getPassword());
            $member->setPassword($hash);
            $member->setRoles(["ROLE_MEMBER"]);
            $member->setStatut("actived");
            $member->setDateInscription(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();
            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email_member', $member,
                (new TemplatedEmail())
                    ->from(new Address('noreply@moveat.com', 'MovEat'))
                    ->to($member->getEmail())
                    ->subject('Veuillez confirmer votre adresse mail')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            return $guardHandler->authenticateUserAndHandleSuccess(
                $member,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );

        }

        return $this->render('member/register.html.twig',[
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/verifyMember/email", name="app_verify_email_member")
     */
    public function verifyMemberEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('homeMember');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse mail a été vérifiée.');

        return $this->redirectToRoute('homeMember');
    }

}
