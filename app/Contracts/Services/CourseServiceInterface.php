<?php

declare(strict_types=1);

namespace App\Contracts\Services;

use App\DTO\CoursesDataDTO;

interface CourseServiceInterface
{
    public function getCoursesToday(): ?CoursesDataDTO;
}
