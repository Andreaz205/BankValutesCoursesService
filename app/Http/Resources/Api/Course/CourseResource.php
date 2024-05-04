<?php

namespace App\Http\Resources\Api\Course;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'num_code'   => $this->getNumCode(),
            'char_code'  => $this->getCharCode(),
            'nominal'    => $this->getNominal(),
            'name'       => $this->getName(),
            'value'      => $this->getValue(),
            'vunit_rate' => $this->getVunitRate(),
        ];
    }
}
