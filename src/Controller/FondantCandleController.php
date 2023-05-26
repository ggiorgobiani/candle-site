<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FondantCandleController extends AbstractController
{
    #[Route('/fondant', name: 'fondant')]
    public function index(): Response
    {
        return $this->render('pages/fondant_candle/index.html.twig', [
            'controller_name' => 'FondantCandleController',
        ]);
    }
}
