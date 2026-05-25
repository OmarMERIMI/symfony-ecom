<?php

namespace App\Controller;

use App\Article\ArticleHandlerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public function __construct(private ArticleHandlerInterface $articleHandler) {}

    #[Route('/articles', name: 'app_articles', methods: ['GET'])]
    public function index(): Response
    {
        $articles = $this->articleHandler->fetchAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/articles/{slug}', name: 'app_article_show', methods: ['GET'])]
    public function show(string $slug, Request $request): Response
    {
        $article = $this->articleHandler->findBySlug($slug);

        if (!$article) {
            throw new NotFoundHttpException('Article introuvable.');
        }

        $likedSlugs = $request->getSession()->get('liked_articles', []);

        return $this->render('article/show.html.twig', [
            'article'  => $article,
            'related'  => $this->articleHandler->findRelated($article),
            'hasLiked' => in_array($slug, $likedSlugs),
        ]);
    }

    #[Route('/articles/{slug}/like', name: 'app_article_like', methods: ['POST'])]
    public function like(string $slug, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('like_' . $slug, $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $article = $this->articleHandler->findBySlug($slug);

        if (!$article) {
            throw new NotFoundHttpException();
        }

        $session   = $request->getSession();
        $liked     = $session->get('liked_articles', []);

        if (!in_array($slug, $liked)) {
            $liked[] = $slug;
            $session->set('liked_articles', $liked);
        }

        return $this->redirectToRoute('app_article_show', ['slug' => $slug]);
    }
}
