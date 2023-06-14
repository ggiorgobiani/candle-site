<?php

namespace App\Controller;

use App\Entity\FondantCandle;
use App\Form\FondantCandleType;
use App\Repository\FondantCandleRepository;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/fondant')]
class FondantCandleController extends AbstractController
{
    #[Route('/', name: 'app_fondant_candle_index', methods: ['GET'])]
    public function index(FondantCandleRepository $fondantCandleRepository): Response
    {
        return $this->render('pages/fondant_candle/index.html.twig', [
            'fondant_candles' => $fondantCandleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_fondant_candle_new', methods: ['GET', 'POST'])]
    public function new(Filesystem $fs, Request $request, FondantCandleRepository $fondantCandleRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $fondantCandle = new FondantCandle();
        $form = $this->createForm(FondantCandleType::class, $fondantCandle);
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
            $fondantCandle->setImage( $filename );

             // Association de l'entité Usert à l'entité Picture
            // $fondantCandle->setUser( $this->getUser() );
        
            $fondantCandleRepository->save($fondantCandle, true);

            return $this->redirectToRoute('app_fondant_candle_index', [], Response::HTTP_SEE_OTHER);
        
        
        }

        return $this->renderForm('pages/fondant_candle/new.html.twig', [
            'fondant_candle' => $fondantCandle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fondant_candle_show', methods: ['GET'])]
    public function show(FondantCandle $fondantCandle): Response
    {
        return $this->render('pages/fondant_candle/show.html.twig', [
            'fondant_candle' => $fondantCandle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fondant_candle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FondantCandle $fondantCandle, FondantCandleRepository $fondantCandleRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form = $this->createForm(FondantCandleType::class, $fondantCandle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fondantCandleRepository->save($fondantCandle, true);

            return $this->redirectToRoute('app_fondant_candle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pages/fondant_candle/edit.html.twig', [
            'fondant_candle' => $fondantCandle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fondant_candle_delete', methods: ['POST'])]
    public function delete(Request $request, FondantCandle $fondantCandle, FondantCandleRepository $fondantCandleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fondantCandle->getId(), $request->request->get('_token'))) {
            $fondantCandleRepository->remove($fondantCandle, true);
        }

        return $this->redirectToRoute('app_fondant_candle_index', [], Response::HTTP_SEE_OTHER);
    }
}
