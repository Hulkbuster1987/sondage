<?php

namespace App\Controller;
use App\Form\SurveysType;
use App\Entity\Surveys;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;



class SurveysController extends AbstractController
{
    #[Route('/surveys', name: 'app_surveys_index', methods:['GET', 'POST'])]
    public function index(LoggerInterface $logger, Request $request

    ): Response
    {
        $newSurveys = new Surveys();
        $form = $this->createForm(SurveysType::class, null, ['method' => 'POST']);
        $form->handleRequest($request);
        $logger->info('FORM CREATION juste pour voir');


        if($form->isSubmitted()) {

            $surveysFormData = $form->getData();
         
            $logger->info('FORMAKJFDSKNFDSOJNDSJKHDKJGNSDLKNFLDKJ');
        }
        return $this->renderForm('surveys/index.html.twig', [
            'form' => $form,
        ]);
    }

   
}
