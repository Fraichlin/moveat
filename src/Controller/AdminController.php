<?php

namespace App\Controller;

use App\Form\AdminType;
use App\Repository\CoachRepository;
use App\Repository\MembreRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class AdminController
 * @package App\Controller
 * @Route("/Admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/home", name="homeAdmin")
     */
    public function home(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @return Response
     * @Route("/profile",name="profileAdmin")
     */
    public function profileAdmin(UserRepository $repository,Request $request,
                                 UserPasswordEncoderInterface $encoder){
        $admin = $repository->findOneBy(['roles'=>['["ROLE_ADMIN"]']]);
        $form = $this->createForm(AdminType::class,$admin);
        $form->add('Enregistrer',SubmitType::class);
        $temp_password = $admin->getPassword();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if($admin->getPassword()=='12345678'){
                $admin->setPassword($temp_password);
            }
            else{
                $hash = $encoder->encodePassword($admin,$admin->getPassword());
                $admin->setPassword($hash);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Votre compte a été modifié avec succès');
            return $this->redirectToRoute('profileAdmin');
        }
        return $this->render('admin/profilAdmin.html.twig',[
            'form' => $form->createView()
        ]);
    }


    //*******COACH

    /**
     * @return Response
     * @Route("/listCoach",name="listCoach")
     */
    public function listCoach(UserRepository $repository){
        $coach = $repository->findCoachByStatus();
        return $this->render('admin/listCoach.html.twig',[
            'coach' => $coach
        ]);
    }
    /**
     * @return Response
     * @Route("/listDemandCoach",name="listDemandCoach")
     */
    public function listDemandCoach(UserRepository $repository){
        $coach = $repository->findBy(['roles'=>['["ROLE_COACH"]'],'statut'=>'nonactived']);
        return $this->render('admin/listDemandCoach.html.twig',[
            'coach' => $coach
        ]);
    }

    /**
     * @Route("/deleteCoach/{id}", name="deleteCoach")
     */
    public function deleteCoach($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($coach->getEmail())
            ->subject('Suppression de votre compte')
            ->htmlTemplate('security/deletedAccount.html.twig');
        $mailer->send($email);
        $this->addFlash('success','Le compte a été supprimé avec succès');
        return $this->redirectToRoute('listCoach');
    }

    /**
     * @Route("/deleteDemandCoach/{id}", name="deleteDemandCoach")
     */
    public function deleteDemandCoach($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($coach->getEmail())
            ->subject('Refus de votre demande d\'inscription')
            ->htmlTemplate('security/deletedDemand.html.twig');
        $mailer->send($email);
        $this->addFlash('success','La demande a été supprimée avec succès');
        return $this->redirectToRoute('listDemandCoach');
    }

    /**
     * @Route("/validateDemandCoach/{id}", name="validateDemandCoach")
     */
    public function validateDemandCoach($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $coach = $repository->find($id);
        $coach->setStatut("actived");
        $coach->setUpdatedAt(new \DateTime());
        $coach->setDateValidation(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($coach->getEmail())
            ->subject('Validation de votre demande d\'inscription')
            ->htmlTemplate('security/validatedDemand.html.twig');
        $mailer->send($email);
        $this->addFlash('success','Le compte a été validé avec succès');
        return $this->redirectToRoute('listDemandCoach');
    }

    /**
     * @Route("/blockCoach/{id}", name="blockCoach")
     */
    public function blockCoach($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $coach = $repository->find($id);
        $coach->setStatut("blocked");
        $coach->setDateBlocage(new \DateTime());
        $coach->setUpdatedAt(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($coach->getEmail())
            ->subject('Blocage de votre compte')
            ->htmlTemplate('security/blockedAccount.html.twig');
        $mailer->send($email);
        $this->addFlash('success','Le compte a été bloqué avec succès.');
        return $this->redirectToRoute('listCoach');
    }

    /**
     * @Route("/unblockCoach/{id}", name="unblockCoach")
     */
    public function unblockCoach($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $coach = $repository->find($id);
        $coach->setStatut("unblocked");
        $coach->setDateDeblocage(new \DateTime());
        $coach->setUpdatedAt(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($coach->getEmail())
            ->subject('Déblocage de votre compte')
            ->htmlTemplate('security/unblockedAccount.html.twig');
        $mailer->send($email);
        $this->addFlash('success','Le compte a été débloqué avec succès.');
        return $this->redirectToRoute('listCoach');
    }

    /**
     * @return Response
     * @Route("/profileCoach/{id}",name="profileAdminCoach")
     */
    public function profileAdminCoach($id,UserRepository $repository){
        $coach = $repository->find($id);
        return $this->render('admin/profilAdminCoach.html.twig',[
            'coach' => $coach
        ]);
    }


//******MEMBER

    /**
     * @return Response
     * @Route("/listMember",name="listMember")
     */
    public function listMember(UserRepository $repository){
        $member = $repository->findBy(['roles'=>['["ROLE_MEMBER"]']]);
        return $this->render('admin/listMember.html.twig',[
            'member' => $member
        ]);
    }
    /**
     * @Route("/deleteMember/{id}", name="deleteMember")
     */
    public function deleteMember($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $member = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($member->getEmail())
            ->subject('Suppression de votre compte')
            ->htmlTemplate('security/deletedAccount.html.twig');
        $mailer->send($email);

        $this->addFlash('success','Le compte a été supprimé avec succès');
        return $this->redirectToRoute('listMember');
    }

    /**
     * @Route("/blockMember/{id}", name="blockMember")
     */
    public function blockMember($id,UserRepository $repository, MailerInterface $mailer): Response
    {
        $member = $repository->find($id);
        $member->setStatut("blocked");
        $member->setDateBlocage(new \DateTime());
        $member->setUpdatedAt(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($member->getEmail())
            ->subject('Blocage de votre compte')
            ->htmlTemplate('security/blockedAccount.html.twig');
        $mailer->send($email);

        $this->addFlash('success','Le compte a été bloqué avec succès.');
        return $this->redirectToRoute('listMember');
    }

    /**
     * @Route("/unblockMember/{id}", name="unblockMember")
     */
    public function unblockMember($id,UserRepository $repository,MailerInterface $mailer): Response
    {
        $member = $repository->find($id);
        $member->setStatut("unblocked");
        $member->setDateDeblocage(new \DateTime());
        $member->setUpdatedAt(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@gmail.com', 'MovEat'))
            ->to($member->getEmail())
            ->subject('Déblocage de votre compte')
            ->htmlTemplate('security/unblockedAccount.html.twig');
        $mailer->send($email);

        $this->addFlash('success','Le compte a été débloqué avec succès.');
        return $this->redirectToRoute('listMember');
    }

    /**
     * @return Response
     * @Route("/profileMember/{id}",name="profileAdminMember")
     */
    public function profileAdminMember($id,UserRepository $repository){
        $member = $repository->find($id);
        return $this->render('admin/profilAdminMember.html.twig',[
            'member' => $member
        ]);
    }

}
