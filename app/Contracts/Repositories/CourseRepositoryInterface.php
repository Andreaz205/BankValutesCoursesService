<?php

declare(strict_types=1);

namespace App\Contracts\Repositories;

use App\DTO\CoursesDataDTO;

interface CourseRepositoryInterface
{
    public function getLatest(): ?CoursesDataDTO;

    public function store(array $fields): void;
}
