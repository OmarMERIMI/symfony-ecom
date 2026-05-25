<?php

namespace App\Controller;

use App\Course\CourseHandlerInterface;
use App\Form\Type\AddToWishlistType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    private CourseHandlerInterface $courseHandler;

    public function __construct(CourseHandlerInterface $courseHandler)
    {
        $this->courseHandler = $courseHandler;
    }

    #[Route('/catalog/all', name: 'app_catalog_all', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $q = $request->query->get('q', '');
        $courses = $this->courseHandler->fetchAllCourses();

        // Filtre de recherche
        if (!empty($q)) {
            $courses = array_filter($courses, function ($course) use ($q) {
                return mb_stripos($course->getName(), $q) !== false || mb_stripos($course->getSummary(), $q) !== false;
            });
        }

        return $this->render('catalog/index.html.twig', [
            'courses' => $courses,
            'searchQuery' => $q
        ]);
    }

    #[Route('/catalog/{slug}', name: 'app_catalog_show', methods: ['GET', 'POST'])]
    public function show(string $slug, Request $request): Response
    {
        $course = $this->courseHandler->getCourseBySlug($slug);

        if (!$course) {
            throw new NotFoundHttpException('Cours introuvable.');
        }

        $form = $this->createForm(AddToWishlistType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', sprintf('Le cours "%s" a été ajouté à votre wishlist !', $course->getName()));
            return $this->redirectToRoute('app_catalog_show', ['slug' => $slug]);
        }

        return $this->render('catalog/show.html.twig', [
            'course' => $course,
            'form'   => $form->createView(),
        ]);
    }

    #[Route('/catalog/{slug}/enroll', name: 'app_catalog_enroll', methods: ['POST'])]
    public function enroll(string $slug, Request $request): Response
    {
        $course = $this->courseHandler->getCourseBySlug($slug);

        if (!$course) {
            throw new NotFoundHttpException('Cours introuvable.');
        }

        if (!$this->isCsrfTokenValid('enroll_' . $slug, $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $session = $request->getSession();
        $enrolled = $session->get('enrolled_courses', []);

        if (!in_array($slug, $enrolled)) {
            $enrolled[] = $slug;
            $session->set('enrolled_courses', $enrolled);
            $this->addFlash('success', sprintf('Félicitations ! Vous êtes maintenant inscrit au cours "%s".', $course->getName()));
        }

        return $this->redirectToRoute('app_catalog_show', ['slug' => $slug]);
    }

    // Affichage des cours similaires
    public function similarCourses(string $slug): Response
    {
        $course = $this->courseHandler->getCourseBySlug($slug);

        if (!$course) {
            return new Response('');
        }

        $similarCourses = $this->courseHandler->findSimilarCourses($course);

        return $this->render('catalog/similar_courses.html.twig', [
            'similarCourses' => $similarCourses,
        ]);
    }
}
