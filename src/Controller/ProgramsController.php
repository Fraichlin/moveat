<?php

namespace App\Controller;

use App\Entity\Jaime;
use App\Entity\Postuler;
use App\Entity\Programs;
use App\Form\ProgramsType;
use App\Repository\JaimeRepository;
use App\Repository\PostulerRepository;
use App\Repository\ProgramsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/Member/programs")
 */
class ProgramsController extends AbstractController
{
    /**
     * @Route("/", name="programs_index", methods={"GET"})
     */
    public function index(ProgramsRepository $programsRepository): Response
    {
        $session = new Session();
        $session->set('id',1);
        return $this->render('programs/index.html.twig', [
            'programs' => $programsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="programs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $program = new Programs();
        $form = $this->createForm(ProgramsType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($program);
            $entityManager->flush();

            return $this->redirectToRoute('programs_index');
        }

        return $this->render('programs/new.html.twig', [
            'programs' => $program,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/sh", name="programs_show", methods={"GET"})
     */
    public function show(Programs $program): Response
    {
        return $this->render('programs/show.html.twig', [
            'programs' => $program,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="programs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Programs $program): Response
    {
        $form = $this->createForm(ProgramsType::class, $program);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('programs_index');
        }

        return $this->render('programs/edit.html.twig', [
            'programs' => $program,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="programs_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Programs $program): Response
    {
        if ($this->isCsrfTokenValid('delete'.$program->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($program);
            $entityManager->flush();
        }

        return $this->redirectToRoute('programs_index');
    }

    /**
     * @Route("/search",name="search")
     */
    function search(ProgramsRepository $repository, Request $request){
        $data=$request->get('cherche');

        $programs=$repository->findBy(['program'=>$data]);
        return $this->render('programs/index.html.twig', [
            'programs' => $programs,
        ]);


    }


}
