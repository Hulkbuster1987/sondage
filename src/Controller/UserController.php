<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user', methods:['GET'])]
    public function index(): Response
    {
        $newUsers = new User();
        $form = $this->createForm(UserType::class);        
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form,
        ]);
    }
}
