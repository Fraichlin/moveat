<?php

namespace App\Controller;

use App\Entity\ProgramNutri;
use App\Form\ProgramNutriType;
use App\Repository\ProgramNutriRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/program/nutri")
 */
class ProgramNutriController extends AbstractController
{
    /**
     * @Route("/", name="program_nutri_index", methods={"GET"})
     */
    public function index(ProgramNutriRepository $programNutriRepository): Response
    {
        return $this->render('program_nutri/index.html.twig', [
            'program_nutris' => $programNutriRepository->findAll(),
        ]);
    }
    /**
     * @Route("/prend", name="prendre_poids", methods={"GET"})
     */
    public function prendrepoid(ProgramNutriRepository $programNutriRepository): Response
    {
        return $this->render('program_nutri/prendre.html.twig', [
            'program_nutris' => $programNutriRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="program_nutri_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $programNutri = new ProgramNutri();
        $form = $this->createForm(ProgramNutriType::class, $programNutri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($programNutri);
            $entityManager->flush();

            return $this->redirectToRoute('program_nutri_index');
        }

        return $this->render('program_nutri/new.html.twig', [
            'program_nutri' => $programNutri,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="program_nutri_show", methods={"GET"})
     */
    public function show(ProgramNutri $programNutri): Response
    {
        return $this->render('program_nutri/show.html.twig', [
            'program_nutri' => $programNutri,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="program_nutri_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProgramNutri $programNutri): Response
    {
        $form = $this->createForm(ProgramNutriType::class, $programNutri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('program_nutri_index');
        }

        return $this->render('program_nutri/edit.html.twig', [
            'program_nutri' => $programNutri,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="program_nutri_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ProgramNutri $programNutri): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programNutri->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($programNutri);
            $entityManager->flush();
        }

        return $this->redirectToRoute('program_nutri_index');
    }
}
