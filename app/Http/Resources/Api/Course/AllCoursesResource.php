<?php

namespace App\Http\Resources\Api\Course;

use App\DTO\CourseItemDTO;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllCoursesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'date'    => $this->getDate(),
            'valutes' => CourseResource::collection($this->getCurrency())
        ];
    }
}
