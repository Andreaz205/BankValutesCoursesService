<?php

declare(strict_types=1);

namespace App\Repositories\Course;

use App\Contracts\Repositories\CourseRepositoryInterface;
use App\DTO\CourseItemDTO;
use App\DTO\CoursesDataDTO;
use App\Models\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function __construct(private Course $model)
    {
        //
    }
    public function getLatest(): ?CoursesDataDTO
    {
        $coursesData = $this->model::query()->orderByDesc('date')->first();

        if (!empty($coursesData)) {
            $dto = new CoursesDataDTO();
            $dto->setDate($coursesData->date);

            $courses = [];

            foreach ($coursesData->data as $valute) {
                $itemDto = new CourseItemDTO(
                    id:        $valute->id,
                    numCode:   $valute->numCode,
                    charCode:  $valute->charCode,
                    nominal:   $valute->nominal,
                    name:      $valute->name,
                    value:     $valute->value,
                    vunitRate: $valute->vunitRate,
                );
                $courses[] = $itemDto;
            }

            $dto->setCurrency($courses);

            return $dto;
        }

        return null;
    }

    public function store(array $fields): void
    {
        $this->model::query()->create($fields);
    }
}
