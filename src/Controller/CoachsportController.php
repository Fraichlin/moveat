<?php

namespace App\Controller;

use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/coachSport")
 */
class CoachsportController extends AbstractController
{
    /**
     * @Route("/list", name="listCoach")
     */
    public function index(CoachRepository $repository): Response
    {
        $coach = $repository->findBy(['type'=>"coachSportif",'statut'=>1]);
        return $this->render('coachsport/list.html.twig', [
            'coach'=> $coach
        ]);
    }
    /**
     * @Route("/demandList", name="demandListCoach")
     */
    public function demandList(CoachRepository $repository): Response
    {
        $coach = $repository->findBy(['type'=>"coachSportif",'statut'=>0]);

        return $this->render('coachsport/demandList.html.twig',[
            'coach'=> $coach
        ]);
    }

    /**
     * @Route("/valid/{id}", name="validCoach")
     */
    public function validDemand(CoachRepository $repository,$id): Response
    {
        $coach = $repository->find($id);
        $coach->setStatut(1);
        $coach->setDatevalidation(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('demandListCoach');
    }

    /**
     * @Route("/reject/{id}", name="rejectCoach")
     */
    public function rejectDemand(CoachRepository $repository,$id): Response
    {
        $coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        return $this->redirectToRoute('demandListCoach');
    }
    /**
     * @Route("/delete/{id}", name="deleteCoach")
     */
    public function delete(CoachRepository $repository,$id): Response
    {
        $coach = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        return $this->redirectToRoute('listCoach');
    }
}
