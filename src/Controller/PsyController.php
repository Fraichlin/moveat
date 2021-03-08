<?php

namespace App\Controller;

use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/psy")
 */
class PsyController extends AbstractController
{
    /**
     * @Route("/list", name="listPsy")
     */
    public function index(CoachRepository $repository): Response
    {
        $psy = $repository->findBy(['type'=>"psy",'statut'=>1]);
        return $this->render('psy/list.html.twig', [
            'psy'=> $psy
        ]);
    }

    /**
     * @Route("/demandList", name="demandListPsy")
     */
    public function demandList(CoachRepository $repository): Response
    {
        $psy = $repository->findBy(['type'=>"psy",'statut'=>0]);

        return $this->render('psy/demandList.html.twig',[
            'psy'=> $psy
        ]);
    }

    /**
     * @Route("/valid/{id}", name="validPsy")
     */
    public function validDemand(CoachRepository $repository,$id): Response
    {
        $psy = $repository->find($id);
        $psy->setStatut(1);
        $psy->setDatevalidation(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('demandListPsy');
    }

    /**
     * @Route("/reject/{id}", name="rejectPsy")
     */
    public function rejectDemand(CoachRepository $repository,$id): Response
    {
        $psy = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($psy);
        $em->flush();
        return $this->redirectToRoute('demandListPsy');
    }

    /**
     * @Route("/delete/{id}", name="deletePsy")
     */
    public function delete(CoachRepository $repository,$id): Response
    {
        $psy = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($psy);
        $em->flush();
        return $this->redirectToRoute('listPsy');
    }
}
