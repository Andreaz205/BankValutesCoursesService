<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;

Route::get('courses', [CourseController::class, 'getCourses']);

