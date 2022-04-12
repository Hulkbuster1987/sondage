<?php

namespace App\Controller;
use App\Form\SurveysType;
use App\Entity\Surveys;
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
        return $this->renderForm('surveys/index.html.twig', [
            'form' => $form,
        ]);
    }
}
