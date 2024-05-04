<?php

declare(strict_types=1);

namespace App\DTO;

class CoursesDataDTO
{
    private string $date;

    /** @var CourseItemDTO[] */
    private array $currency;

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getCurrency(): array
    {
        return $this->currency;
    }

    public function setCurrency(array $currency): void
    {
        $this->currency = $currency;
    }
}

