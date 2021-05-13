<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Comment;
use App\Entity\Membre;
use App\Entity\NutritionalProgram;
use App\Form\CoachType;
use App\Form\CommentType;
use App\Form\MemberType;
use App\Repository\AdministrateurRepository;
use App\Repository\CoachRepository;
use App\Repository\CommentRepository;
use App\Repository\MembreRepository;
use App\Repository\NutritionalProgramRepository;
use App\Repository\SportProgramRepository;
use App\Repository\UserRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;


/**
 * Class CoachController
 * @package App\Controller
 * @Route("/Member")
 */
class MemberController extends AbstractController
{

    /**
     * @Route("/home", name="homeMember")
     */
    public function home(): Response
    {
        return $this->render('member/home.html.twig');
    }

    /**
     * @Route("/results/{id}", name="results")
     */
    public function results($id, UserRepository $repository): Response
    {
        $user = $repository->find($id);
        $taille = $user->getTaille();
        $poids = $user->getPoids();

        $bmi = $poids/($taille*$taille);

        if ($bmi < 18.5) {
            $type = 'A' &&
                $messageAboutBmi = "Votre poids est trop bas";
        } else if ($bmi > 24.99) {
            $type = 'B'  &&
                $messageAboutBmi = "Votre poids est trop haut";
        } else {
            $type ='c' &&
                $messageAboutBmi = "Votre poids est OK" ;
        }
        return $this->render('member/results.html.twig', [
            'taille' => $taille,
            'poids' => $poids,
            'type'=> $type,
            'bmi' => round ($bmi, 2),
            'messageAboutBmi' => $messageAboutBmi,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="deleteProfileMember")
     */
    public function delete($id,UserRepository $repository): Response
    {
        $member = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();
        $this->addFlash('success','Votre compte a été supprimé avec succès');
        return $this->render("index.html.twig");
    }
    /**
     * @return Response
     * @Route("/updateProfile/{id}",name="updateProfileMember")
     */
    public function updateProfil($id, UserRepository $repository,Request $request,UserPasswordEncoderInterface $encoder){
        $member= $repository->find($id);
        $form = $this->createForm(MemberType::class,$member);
        $form->add('Enregistrer',SubmitType::class);
        $temp_password =$member->getPassword();
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid() ){
            if($member->getPassword()=='12345678'){
                $member->setPassword($temp_password);
            }
            else{
                $hash = $encoder->encodePassword($member,$member->getPassword());
                $member->setPassword($hash);
            }
            $member->setUpdatedAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Votre compte a été modifié avec succès');
            return $this->redirectToRoute('homeMember');
        }

        return $this->render('member/updateProfile.html.twig',[
            'form' => $form->createView(),
            'user'=>$member
        ]);
    }
    /**
     * @Route("/sh", name="showA", methods={"GET"})
     */
    public function showA( NutritionalProgramRepository $repository,Request $request, PaginatorInterface $paginator ): Response
    {
        $allprogramme = $repository->findBy(['type'=>'A']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );

        return $this->render('nutritional_program/typeA.html.twig', [
            'programme' => $programme,
        ]);


    }
    /**
     * @Route("/shb", name="showB", methods={"GET"})
     */
    public function showB( NutritionalProgramRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $allprogramme = $repository->findBy(['type'=>'B']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('nutritional_program/TypeB.html.twig', [
            'programme' => $programme,
        ]);

    }
    /**
     * @Route("/shc", name="showC", methods={"GET"})
     */
    public function showC( NutritionalProgramRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $allprogramme = $repository->findBy(['type'=>'C']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('nutritional_program/typeC.html.twig', [
            'programme' => $programme,
        ]);
    }

    /**
     * @return Response
     * @Route("/idsh/{id}", name="show_id", methods={"GET","POST"})
     */
    public function showid(NutritionalProgramRepository $repository2,Request $request,CommentRepository $commentRepository,UserRepository $repository, $id): Response
    {
        $programme = $repository2->find($id);
        $comment = new Comment();
        $form1 = $this->createForm(CommentType::class,$comment);
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                ->setNuProgram($programme);
            $value=$repository->find($id);
            $comment->setPatient($value);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('show_id',['id'=>$id]);
        }
        $offrepost = $commentRepository->findBy(['nuProgram'=>$programme]);

        return $this->render('nutritional_program/showid.html.twig', [
            'programme' => $programme,
            'comments'=> $offrepost,
            'commentForm'=>$form1->createView(),
        ]);
    }

    /**
     * @Route("/listp/{id}", name="listp", methods={"GET"})
     */
    public function listp(NutritionalProgramRepository $repository, $id): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('isRemoteEnabled', TRUE);
        $pdfOptions->set('tempDir', '%kernel.project_dir%/public/image');
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $programme = $repository->find($id);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('nutritional_program/listp.html.twig', [
            'programme' => $programme,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();


        // Output the generated PDF to Browser (force download)
        //$dompdf->stream("mypdf.pdf", [
        // "Attachment" => true
        //]);
        // Store PDF Binary Data

        //generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/shf", name="showf", methods={"GET"})
     */
    public function index2(UserRepository $repository,Request $request, PaginatorInterface $paginator): Response
    {
        $coach = $repository->findActivedNutritionistCoach();
        $pg = $paginator->paginate(
        // Doctrine Query, not results
            $coach,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('member/showf.html.twig', [
            'nutrition' => $pg,
        ]);
    }


    //programme sportif

    /**
     * @Route("/sportProgram", name="sportProgram")
     */
    public function sportProgram(): Response
    {
        return $this->render('member/sportProgram.html.twig');
    }

//    /**
//     * @Route("/psyProgram", name="programs_index", methods={"GET"})
//     */
//    public function index(SportProgramRepository $repository): Response
//    {
//        return $this->render('member/sportProgram.html.twig', [
//            'programs' => $repository->findAll(),
//        ]);
//    }
//
//    /**
//     * @Route("/psyProgram/search",name="search")
//     */
//    function search(SportProgramRepository $repository, Request $request){
//        $data=$request->get('cherche');
//
//        $programs=$repository->findBy(['program'=>$data]);
//        return $this->render('member/sportProgram.html.twig', [
//            'programs' => $programs,
//        ]);
//    }
//
//    /**
//     * @Route("/psyProgram/check", name="check")
//     */
//    public function check(): Response
//    {
//        return $this->render('member/checkPsyProgram.html.twig', [
//            'controller_name' => 'CheckController',
//        ]);
//    }

}
