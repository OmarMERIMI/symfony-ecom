<?php

namespace App\Controller;

use App\Course\CourseHandlerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    private CourseHandlerInterface $courseHandler;

    public function __construct(CourseHandlerInterface $courseHandler)
    {
        $this->courseHandler = $courseHandler;
    }

    #[Route('/page', name: 'app_home')]
    public function index(): Response
    {
        $allCourses = $this->courseHandler->fetchAllCourses();
        $courses = array_slice($allCourses, 0, 8);

        return $this->render('page/index.html.twig', [
            'courses' => $courses,
        ]);
    }
}
