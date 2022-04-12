<?php

namespace App\Controller;
use App\Form\SurveysType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SurveysController extends AbstractController
{
    #[Route('/surveys', name: 'app_surveys_index', methods:['GET'])]
    public function index(): Response
    {
        $newSurveys = new Surveys();
        $form = $this->createForm(SurveysType::class);
        return $this->render('templates/surveys/index.html.twig', [
            'controller_name' => 'SurveysController',
        ]);
    }
}
dgdg