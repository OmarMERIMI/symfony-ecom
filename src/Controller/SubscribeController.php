<?php

namespace App\Controller;

use App\Form\Type\SubscribeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscribeController extends AbstractController
{
    public function showForm(): Response
    {
        $form = $this->createForm(SubscribeType::class);

        return $this->render('subscribe/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/subscribe', name: 'app_subscribe', methods: ['POST'])]
    public function proceed(Request $request): Response
    {
        $form = $this->createForm(SubscribeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO: Enregistrer en BDD ou envoyer un email de confirmation
            $this->addFlash('success', 'Votre inscription à la newsletter a été validée !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('subscribe/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
