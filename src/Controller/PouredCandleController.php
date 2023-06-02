<?php

namespace App\Controller;

use App\Entity\PouredCandle;
use App\Form\PouredCandleType;
use App\Repository\PouredCandleRepository;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/poured')]
class PouredCandleController extends AbstractController
{
    #[Route('/', name: 'app_poured_candle_index', methods: ['GET'])]
    public function index(PouredCandleRepository $pouredCandleRepository): Response
    {
        return $this->render('poured_candle/index.html.twig', [
            'poured_candles' => $pouredCandleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_poured_candle_new', methods: ['GET', 'POST'])]
    public function new(Filesystem $fs, Request $request, PouredCandleRepository $pouredCandleRepository): Response
    {
        $pouredCandle = new PouredCandle();
        $form = $this->createForm(PouredCandleType::class, $pouredCandle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $root = $this->getParameter('kernel.project_dir');

            // The upload directory
            $uploadsDir = $root . "/public/uploads/";

            // Define source and destination
            $image = $form['image']->getData()->getPathname();

            // Recupération de l'extention du fichier original
            $extension = $form['image']->getData()->getClientOriginalName();
            $extension = explode(".", $extension);
            $extension = $extension[1];
            $extension = ".".$extension;

            // Generation du nom a partir du contenu hashé en MD5
            $filename = file_get_contents($image);
            $filename = md5($filename);
            $filename.= $extension;

            $destination = $uploadsDir.$filename;
            
            // Copy temp file to upload dir
            $fs->copy(
                $image,
                $destination,
                true
            );

            // 3. Modifier la source du fichier $picture->setSource()
            $pouredCandle->setImage( $filename );

             // Association de l'entité Usert à l'entité Picture
            // $pouredCandle->setUser( $this->getUser() );
            $pouredCandleRepository->save($pouredCandle, true);

            return $this->redirectToRoute('app_poured_candle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('poured_candle/new.html.twig', [
            'poured_candle' => $pouredCandle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poured_candle_show', methods: ['GET'])]
    public function show(PouredCandle $pouredCandle): Response
    {
        return $this->render('poured_candle/show.html.twig', [
            'poured_candle' => $pouredCandle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_poured_candle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PouredCandle $pouredCandle, PouredCandleRepository $pouredCandleRepository): Response
    {
        $form = $this->createForm(PouredCandleType::class, $pouredCandle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pouredCandleRepository->save($pouredCandle, true);

            return $this->redirectToRoute('app_poured_candle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('poured_candle/edit.html.twig', [
            'poured_candle' => $pouredCandle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poured_candle_delete', methods: ['POST'])]
    public function delete(Request $request, PouredCandle $pouredCandle, PouredCandleRepository $pouredCandleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pouredCandle->getId(), $request->request->get('_token'))) {
            $pouredCandleRepository->remove($pouredCandle, true);
        }

        return $this->redirectToRoute('app_poured_candle_index', [], Response::HTTP_SEE_OTHER);
    }
}
