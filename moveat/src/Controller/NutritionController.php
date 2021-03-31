<?php

namespace App\Controller;

use App\Entity\Nutrition;
use App\Form\NutritionType;
use App\Repository\NutritionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/nutrition")
 */
class NutritionController extends AbstractController
{
    /**
     * @Route("/", name="nutrition_index", methods={"GET"})
     */
    public function index(NutritionRepository $nutritionRepository): Response
    {
        return $this->render('nutrition/index.html.twig', [
            'nutrition' => $nutritionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="nutrition_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $nutrition = new Nutrition();
        $form = $this->createForm(NutritionType::class, $nutrition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($nutrition);
            $entityManager->flush();

            return $this->redirectToRoute('nutrition_index');
        }

        return $this->render('nutrition/new.html.twig', [
            'nutrition' => $nutrition,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/shf", name="showf", methods={"GET"})
     */
    public function index2(NutritionRepository $nutritionRepository): Response
    {
        return $this->render('nutrition/showf.html.twig', [
            'nutrition' => $nutritionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="nutrition_show", methods={"GET"})
     */
    public function show(Nutrition $nutrition): Response
    {
        return $this->render('nutrition/show.html.twig', [
            'nutrition' => $nutrition,
        ]);
    }
    /**
     *
     * @Route("/nush", name="shownf", methods={"GET"})
     */
    public function showf(NutritionRepository $nutritionRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $nutrition = $nutritionRepository;
        $repository = $this->getDoctrine()->getRepository(Nutrition::class);
        $allnutrition = $repository->findAll();
        $nutrition = $paginator->paginate(
        // Doctrine Query, not results
            $allnutrition,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('nutrition/showf.html.twig', [
            'nutrition' => $nutrition,
        ]);

    }

    /**
     * @Route("/{id}/edit", name="nutrition_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Nutrition $nutrition): Response
    {
        $form = $this->createForm(NutritionType::class, $nutrition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nutrition_index');
        }

        return $this->render('nutrition/edit.html.twig', [
            'nutrition' => $nutrition,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="nutrition_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Nutrition $nutrition): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nutrition->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($nutrition);
            $entityManager->flush();
        }

        return $this->redirectToRoute('nutrition_index');
    }
}
