<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\CourseServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Course\AllCoursesResource;

class CourseController extends Controller
{
    /**
     * @throws \Exception
     */
    public function getCourses(CourseServiceInterface $courseService): AllCoursesResource
    {
        return AllCoursesResource::make($courseService->getCoursesToday());
    }
}
