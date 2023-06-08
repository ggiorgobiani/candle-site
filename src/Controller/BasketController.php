<?php

namespace App\Controller;

use App\Entity\PouredCandle;
use App\Entity\FondantCandle;
use App\Repository\PouredCandleRepository;
use App\Repository\FondantCandleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BasketController extends AbstractController
{
    #[Route('/basket', name: 'basket')]
    public function index(SessionInterface $sessionInterface,FondantCandleRepository $fondantCandleRepository, PouredCandleRepository $pouredCandleRepository): Response
    {
        $basket =$sessionInterface->get("basket", []);
        $dataBasket = [];
        $total = 0;

        foreach ($basket as $id => $quantity) {
            $fondantCandle = $fondantCandleRepository->find($id);
            $pouredCandle = $pouredCandleRepository->find($id);
            $dataBasket = [
                "product" => $fondantCandle, $pouredCandle,
                "quantity" => $quantity
            ];
            $total += $fondantCandle->getPrice() * $quantity;
            $total += $pouredCandle->getPrice() * $quantity;
        }

        return $this->render('pages/basket/index.html.twig', compact("dataBasket", "total"));
    }


    #[Route("/add/{id}", name: 'basket_add')]
    public function add($id, FondantCandle $fondantCandle, PouredCandle $pouredCandle, SessionInterface $sessionInterface)
    {
        //recuperer la panier actuel
        $basket = $sessionInterface->get("basket", []);
        $id = $fondantCandle->getId();
        $id = $pouredCandle->getId();

        if(!empty($basket[$id])){
            $basket[$id]++;
        }else{
            $basket[$id] = 1;
        }

        $sessionInterface->set("basket", $basket);

         return $this->redirectToRoute("basket");
    }


}
