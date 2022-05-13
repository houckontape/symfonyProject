<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostHomeRepository;
use Twig\Environment;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Environment $twig,PostHomeRepository $post): Response
    {
        // recuperation des info de configuration_Page
        // recuperation des info de Post_Home
        $posts= $post->findAll();
         return new Response($twig->render('home/index.html.twig', ['posts'=>$posts]));
        
    }
}
