<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ResultController extends AbstractController
{
    /**
     * @Route("/results", name="results")
     */
    public function results(Request $request): Response
    {
        $taille = $request->get('taille');
        $poid = $request->get('poid');
        $gender = $request->get('gender');
        $type = $request->get('type');

        #$heightInM = $taille/100;
        $bmi = $poid/($taille*$taille);

        if ($bmi < 18.5) {
            $type = 'A' &&
            $messageAboutBmi = "Your weight is too low";
        } else if ($bmi > 24.99) {
            $type = 'B'  &&
            $messageAboutBmi = "Your weight is too high";
        } else {
            $type ='c' &&
            $messageAboutBmi = "Your weight is OK" ;
        }



        return $this->render('result/results.html.twig', [
            'gender' => $gender,
            'taille' => $taille,
            'poid' => $poid,
            'type' => $type,
            'bmi' => round ($bmi, 2),
            'messageAboutBmi' => $messageAboutBmi,
        ]);
    }

}
