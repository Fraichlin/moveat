<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Patient;
use App\Entity\Programme;
use App\Form\CommentType;
use App\Form\PatientType;
use App\Form\ProgrammeType;
use App\Repository\CommentRepository;
use App\Repository\PatientRepository;
use App\Repository\ProgrammeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/programme")
 */
class ProgrammeController extends AbstractController
{
    /**
     * @Route("/", name="programme_index", methods={"GET"})
     */
    public function index(ProgrammeRepository $programmeRepository): Response
    {
        return $this->render('programme/index.html.twig', [
            'programme' => $programmeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="programme_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $programme = new Programme();
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($programme);
            $entityManager->flush();

            return $this->redirectToRoute('programme_index');
        }

        return $this->render('programme/new.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/sh", name="showA", methods={"GET"})
     */
    public function showA( ProgrammeRepository $programmeRepository,Request $request, PaginatorInterface $paginator ): Response

    {
        $programme = $programmeRepository;
        $repository = $this->getDoctrine()->getRepository(Programme::class);
        $allprogramme = $repository->findBy(['type'=>'A']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );

        return $this->render('programme/typeA.html.twig', [
            'programme' => $programme,
        ]);


    }
    /**
 * @Route("/shb", name="showB", methods={"GET"})
 */
    public function showB( ProgrammeRepository $programmeRepository, Request $request, PaginatorInterface $paginator): Response

    {
        $programme = $programmeRepository;
        $repository = $this->getDoctrine()->getRepository(Programme::class);
        $allprogramme = $repository->findBy(['type'=>'B']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('programme/TypeB.html.twig', [
            'programme' => $programme,
        ]);


    }
    /**
     * @Route("/shc", name="showC", methods={"GET"})
     */
    public function showC( ProgrammeRepository $programmeRepository, Request $request, PaginatorInterface $paginator): Response

    {
        $programme = $programmeRepository;
        $repository = $this->getDoctrine()->getRepository(Programme::class);
        $allprogramme = $repository->findBy(['type'=>'C']);
        $programme = $paginator->paginate(
        // Doctrine Query, not results
            $allprogramme,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('programme/typeC.html.twig', [
            'programme' => $programme,
        ]);


    }

    /**
     * @Route("/{id}", name="programme_show", methods={"GET"})
     */
    public function show(Programme $programme): Response
    {
        return $this->render('programme/show.html.twig', [
            'programme' => $programme,
        ]);
    }

    /**
     * @param Programme $programme
     * @param Request $request
     * @param CommentRepository $commentRepository
     * @param PatientRepository $repository
     * @param $id
     * @return Response
     * @Route("/idsh/{id}", name="show_id", methods={"GET","POST"})
     */
    public function showid(Programme $programme,Request $request,CommentRepository $commentRepository,PatientRepository $repository, $id): Response
    {
        $comment = new Comment();
        $form1 = $this->createForm(CommentType::class,$comment);
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                ->setProgramme($programme);
            $value=$repository->find($id);
            $comment->setPatient($value);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('show_id',['id'=>$id]);
        }
        $offrepost = $commentRepository->findBy(['programme'=>$programme]);

        return $this->render('programme/showid.html.twig', [
            'programme' => $programme,
            'comments'=> $offrepost,
            'commentForm'=>$form1->createView(),
        ]);
    }

    /**
     * @Route("/listp/{id}", name="listp", methods={"GET"})
     */
    public function listp(ProgrammeRepository $programmeRepository, $id): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('isRemoteEnabled', TRUE);
        $pdfOptions->set('tempDir', '%kernel.project_dir%/public/image');
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $programme = $programmeRepository;
        $repository = $this->getDoctrine()->getRepository(Programme::class);
        $programme = $repository->find($id);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('programme/listp.html.twig', [
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
        $output = $dompdf->output();

        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->get('kernel')->getProjectDir() . '/public';
        // e.g /var/www/project/public/mypdf.pdf
        $pdfFilepath =  $publicDirectory . '/mypdf.pdf';

        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);

        // Send some text response
        return new Response("The PDF file has been succesfully generated !");

    }

    /**
     * @Route("/{id}/edit", name="programme_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Programme $programme): Response
    {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('programme_index');
        }

        return $this->render('programme/edit.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="programme_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Programme $programme): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('programme_index');
    }


}

