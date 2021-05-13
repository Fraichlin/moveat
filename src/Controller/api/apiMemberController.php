<?php

namespace App\Controller\api;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @package App\Controller\api
 * @Route("/Api")
 */
class apiMemberController extends AbstractController
{
    /**
     * @Route("/registerMember", name="apiRegisterMember")
     */
    public function registerMember(Request $request, SerializerInterface $serializer): Response
    {
        $content = $request->getContent();
        $data = $serializer->deserialize($content,User::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        return new Response('Membre ajouté avec succès');
    }
}
