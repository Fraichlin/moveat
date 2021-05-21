<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AdminType;
use App\Form\Appointment1Type;
use App\Repository\AppointmentRepository;
use App\Repository\CoachRepository;
use App\Repository\MembreRepository;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class AdminController
 * @package App\Controller
 * @Route("/Admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="homeAdmin")
     */
    public function home(UserRepository $repository): Response
    {
        $currentYear = Date('Y');
        $coach = $repository->findValidedCoachByStatus();
        $member = $repository->findMember();
        $nutritionist = $repository->findValidedNutritionist();
        $coachsportif = $repository->findValidedCoachsportif();
        $psy = $repository->findValidedPsy();

        //chart for coachs and members
        $spByMonth = array();
        $ntByMonth = array();
        for($i=1;$i<=12;$i++){
            $spByMonth[$i-1] = count($repository->findMemberByMonth($currentYear,$i));
            $ntByMonth[$i-1] = count($repository->findValidedCoachByMonth($currentYear,$i));
        }
        $barChart = new ColumnChart();
        $barChart->getData()->setArrayToDataTable(
            [['Mois', 'Coachs','Membres'],
                ['JANV',     $ntByMonth[0],$spByMonth[0]],
                ['FEVR',      $ntByMonth[1],$spByMonth[1]],
                ['MARS',  $ntByMonth[2],$spByMonth[2]],
                ['AVRIL', $ntByMonth[3],$spByMonth[3]],
                ['MAI',    $ntByMonth[4],$spByMonth[4]],
                ['JUIN',    $ntByMonth[5],$spByMonth[5]],
                ['JUIL',    $ntByMonth[6],$spByMonth[6]],
                ['AOUT',    $ntByMonth[7],$spByMonth[7]],
                ['SEPT',    $ntByMonth[8],$spByMonth[8]],
                ['OCT',    $ntByMonth[9],$spByMonth[9]],
                ['NOV',    $ntByMonth[10],$spByMonth[10]],
                ['DEC',    $ntByMonth[11],$spByMonth[11]],
            ]
        );
        $barChart->getOptions()->setTitle('Nombre de coachs: '.count($coach).'.'.'
        Nombre de membres: '.count($member).'.');
        $barChart->getOptions()->setHeight(500);
        $barChart->getOptions()->setWidth(1100);
        $barChart->getOptions()->getTitleTextStyle()->setBold(true);
        $barChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $barChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $barChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $barChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        //chart for differents types of coachs
        $ntByMonth = array();
        $spByMonth = array();
        $psyByMonth[0] = array();
        for($i=1;$i<=12;$i++){
            $ntByMonth[$i-1] = count($repository->findValidedNutritionistByMonth($currentYear,$i));
            $spByMonth[$i-1] = count($repository->findValidedCSportByMonth($currentYear,$i));
            $psyByMonth[$i-1] = count($repository->findValidedPsyByMonth($currentYear,$i));
        }
        $barChart2 = new ColumnChart();
        $barChart2->getData()->setArrayToDataTable(
            [['Mois', 'Nutritionistes','Coachs sportifs','Psychothérapeutes'],
                ['JANV',     $ntByMonth[0],$spByMonth[0],$psyByMonth[0]],
                ['FEVR',      $ntByMonth[1],$spByMonth[1],$psyByMonth[1]],
                ['MARS',  $ntByMonth[2],$spByMonth[2],$psyByMonth[2]],
                ['AVRIL', $ntByMonth[3],$spByMonth[3],$psyByMonth[3]],
                ['MAI',    $ntByMonth[4],$spByMonth[4],$psyByMonth[4]],
                ['JUIN',    $ntByMonth[5],$spByMonth[5],$psyByMonth[5]],
                ['JUIL',    $ntByMonth[6],$spByMonth[6],$psyByMonth[6]],
                ['AOUT',    $ntByMonth[7],$spByMonth[7],$psyByMonth[7]],
                ['SEPT',    $ntByMonth[8],$spByMonth[8],$psyByMonth[8]],
                ['OCT',    $ntByMonth[9],$spByMonth[9],$psyByMonth[9]],
                ['NOV',    $ntByMonth[10],$spByMonth[10],$psyByMonth[10]],
                ['DEC',    $ntByMonth[11],$spByMonth[11],$psyByMonth[11]],
            ]
        );
        $barChart2->getOptions()->setTitle('Nombre de nutritionistes: '.count($nutritionist).'.'.'
        Nombre de coachs sportifs: '.count($coachsportif).'.'.'
        Nombre de Psychothérapeutes: '.count($psy).'.');
        $barChart2->getOptions()->setHeight(500);
        $barChart2->getOptions()->setWidth(1100);
        $barChart2->getOptions()->getTitleTextStyle()->setBold(true);
        $barChart2->getOptions()->getTitleTextStyle()->setColor('#009900');
        $barChart2->getOptions()->getTitleTextStyle()->setItalic(true);
        $barChart2->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $barChart2->getOptions()->getTitleTextStyle()->setFontSize(20);

        //piechart pour l'ensemble des utilisateurs
        $piechart = new PieChart();
        $piechart->getData()->setArrayToDataTable(
            [['Utilisateurs','Nombre'],
                ['Coachs', count($coach)],
                ['Membres', count($member)],
            ]
        );
        //piechart pour l'ensemble des coachs
        $piechart2 = new PieChart();
        $piechart2->getData()->setArrayToDataTable(
            [['Coachs','Nombre'],
                ['Nutritionistes', count($nutritionist)],
                ['Coachs Sportifs', count($coachsportif)],
                ['Psychothérapeutes', count($psy)],
            ]
        );


        return $this->render('admin/home.html.twig', [
            'barchart' => $barChart,
            'barchart2'=>$barChart2,
            'piechart'=>$piechart,
            'piechart2'=>$piechart2
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
        $coach = $repository->findValidedCoachByStatus();
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

    /**
     * @Route("/appointment/list", name="listRdvAdmin", methods={"GET"})
     */
    public function listRdv(AppointmentRepository $appointmentRepository): Response
    {
        return $this->render('admin/listrdv.html.twig', [
            'appointments' => $appointmentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/appointment/{id}", name="appointment_showAdmin", methods={"GET"})
     */
    public function showRdv(Appointment $appointment): Response
    {
        return $this->render('admin/showRdv.html.twig', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * @Route("/appointment/{id}/edit", name="appointment_editAdmin", methods={"GET","POST"})
     */
    public function editRdv(Request $request, Appointment $appointment): Response
    {
        $form = $this->createForm(Appointment1Type::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listRdv');
        }

        return $this->render('admin/editRdv.html.twig', [
            'appointment' => $appointment,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("appointment/{id}", name="appointment_deleteAdmin", methods={"DELETE"})
     */
    public function deleteRdv(Request $request, Appointment $appointment): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($appointment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('listRdvAdmin');
    }

}
