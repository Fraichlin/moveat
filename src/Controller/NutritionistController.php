<?php

namespace App\Controller;

use App\Entity\Nutritioniste;
use App\Repository\CoachRepository;
use App\Repository\DemandeinscriptionRepository;
use App\Repository\NutritionisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/nutritionist")
 */
class NutritionistController extends AbstractController
{
    /**
     * @Route("/demandList", name="demandList")
     */
    public function demandList(CoachRepository $repository): Response
    {
        $nutritionist = $repository->findBy(['type'=>"nutritioniste",'statut'=>0]);

        return $this->render('nutritionist/demandList.html.twig',[
            'nutritionist'=> $nutritionist
        ]);
    }
    /**
     * @Route("/list", name="list")
     */
    public function list(CoachRepository $repository): Response
    {
        $nutritionist = $repository->findBy(['type'=>"nutritioniste",'statut'=>1]);
        return $this->render('nutritionist/list.html.twig', [
            'nutritionist'=> $nutritionist
        ]);
    }
    /**
     * @Route("/valid/{id}", name="valid")
     */
    public function validDemand(CoachRepository $repository,$id): Response
    {
        $nutritionist = $repository->find($id);
        $nutritionist->setStatut(1);
        $nutritionist->setDatevalidation(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('demandList');
    }

    /**
     * @Route("/reject/{id}", name="reject")
     */
    public function rejectDemand(CoachRepository $repository,$id): Response
    {
        $nutritionist = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($nutritionist);
        $em->flush();
        return $this->redirectToRoute('demandList');
    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(CoachRepository $repository,$id): Response
    {
        $nutritionist = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($nutritionist);
        $em->flush();
        return $this->redirectToRoute('list');
    }
}
