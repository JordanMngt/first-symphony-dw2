<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home_index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'prenom' => 'Jordan',
        ]);
    }
    #[Route('/about', name: 'app_home_about')]
    public function about() : Response 
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'A propos',
        ]);
    }
}
