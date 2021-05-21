<?php

namespace App\Controller\api;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class apiLoginController extends AbstractController
{
    /**
     * @Route("/Api/login", name="api_login")
     */
    public function login(Request $request,UserPasswordEncoderInterface $encoder,UserRepository $repository,NormalizerInterface $normalizer): Response
    {
        $user = $repository->searchUser($request->get('email'));
        $password = $request->get('password');


        if($user){
            if(password_verify($password,$user[0]->getPassword())){
                    $jsonContent = $normalizer->normalize($user,'json',['groups'=>'post:read']);
                    return new Response(json_encode($jsonContent),200);
            }
            else{
                $user1 = $repository->searchUser("a");
                $jsonContent = $normalizer->normalize($user1,'json',['groups'=>'post:read']);
                return new Response(json_encode($jsonContent),200);
            }

        }
        else{
            $user1 = $repository->searchUser("a");
            $jsonContent = $normalizer->normalize($user1,'json',['groups'=>'post:read']);
            return new Response(json_encode($jsonContent),200);
        }

    }
}
