<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'message' => 'Welcome to my new controller!',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function blog(): Response
    {
        return $this->render('homepage/blog.html.twig', []);
    }
}