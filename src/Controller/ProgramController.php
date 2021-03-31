<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * @Route("/program", name="program")
     */
    public function index(): Response
    {
        return $this->render('program/program.html.twig', [
            'controller_name' => 'ProgramController',
        ]);
    }



   /**
     * @Route("/calendrier", name="calendrier")
     */
    public function calendar(CalendarRepository $calendar): Response
    {
        $events = $calendar->findAll();
        $rdvs = [];
        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
                'allDay' => $event->getAllDay(),
            ];
        }
        $data = json_encode($rdvs);


                return $this->render('program/calendar.html.twig', compact('data'));

    }
}
