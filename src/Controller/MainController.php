<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SurveysType;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function createSurveys(): Response
    {
        $newSurveys = new Surveys();
        $form = $this->createForm(CreateSurveysFormType::class);
        return $this->render('templates/surveys/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
