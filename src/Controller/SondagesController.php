<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SondagesController extends AbstractController
{
    #[Route('/sondages', name: 'app_sondages')]
    public function index(): Response
    {
        return $this->render('sondages/index.html.twig', [
            'controller_name' => 'SondagesController',
        ]);
    }
}
