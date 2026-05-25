<?php

namespace App\Course;

use App\DTO\Course;

interface SimilarCourseProviderInterface
{
    /**
     * @return Course[]
     */
    public function findSimilarCourses(Course $course): array;
}
