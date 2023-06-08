<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'account')]
    public function index(): Response
    {
        $registrationForm = $this->createForm(RegistrationFormType::class);

        
        return $this->render('pages/account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
}
