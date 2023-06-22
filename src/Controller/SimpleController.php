<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SimpleController extends AbstractController
{
    #[Route('/simple', name: 'app_simple')]
    public function index(): Response
    {
        return $this->render('simple/index.html.twig', [
            'controller_name' => 'SimpleController',
        ]);
    }
}
