<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    /**
     * @Route("/hello")
     */
    public function hello()
    {
        return new Response("Hello");
    }

    /**
     * @Route("/login", name="app_unauthenticated")
     */
    public function unauthenticated()
    {
        return new Response("Not authenticated", Response::HTTP_UNAUTHORIZED);
    }
}