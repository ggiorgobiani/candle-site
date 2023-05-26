<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PouredCandleController extends AbstractController
{
    #[Route('/poured', name: 'poured')]
    public function index(): Response
    {
        return $this->render('pages/poured_candle/index.html.twig', [
            'controller_name' => 'PouredCandleController',
        ]);
    }
}
