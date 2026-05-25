<?php

namespace App\Course;

use App\DTO\Course;

interface CourseHandlerInterface extends SimilarCourseProviderInterface
{
    /** @return Course[] */
    public function fetchAllCourses(): array;

    public function getCourseBySlug(string $slug): ?Course;
}
