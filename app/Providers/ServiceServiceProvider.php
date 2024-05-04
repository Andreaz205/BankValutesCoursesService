<?php

declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Services\CourseServiceInterface;
use App\Services\Course\CourseService;
use App\Services\Logger\Logger;
use App\Services\Logger\LoggerInterface;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CourseServiceInterface::class, CourseService::class);
        $this->app->bind(LoggerInterface::class, Logger::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
