<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(): Response
    {
        return $this->render('sites/home.html.twig', ['siteName' => 'Home']);
    }

    /**
     * @Route("/hangman")
     */
    public function hangman(): Response
    {
        return $this->render('minigames/hangman.html.twig', ['siteName' => 'Hangman']);
    }

    /**
     * @Route("/login")
     */
    public function login(): Response
    {
        return $this->render('sites/placeholder.html.twig', ['siteName' => 'Login']);
    }

    /**
     * @Route("/register")
     */
    public function register(): Response
    {
        return $this->render('sites/placeholder.html.twig', ['siteName' => 'Register']);
    }
}
