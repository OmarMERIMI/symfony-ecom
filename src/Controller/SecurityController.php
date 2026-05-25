<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/security', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('_username');
            
            // Connexion factice (session temporaire pour le TP)
            $session = $request->getSession();
            $session->set('user_email', $email);
            
            $this->addFlash('success', 'Vous êtes connecté avec succès !');
            
            return $this->redirectToRoute('app_home');
        }

        return $this->render('security/login.html.twig');
    }

    #[Route('/logout', name: 'app_logout', methods: ['POST'])]
    public function logout(Request $request): Response
    {
        if (!$this->isCsrfTokenValid('logout', $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $request->getSession()->remove('user_email');
        $request->getSession()->remove('user_name');

        $this->addFlash('info', 'Vous avez été déconnecté.');

        return $this->redirectToRoute('app_home');
    }
}
