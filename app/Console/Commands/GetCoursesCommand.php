<?php

namespace App\Console\Commands;

use App\Contracts\Repositories\CourseRepositoryInterface;
use App\Contracts\Services\CourseServiceInterface;
use App\DTO\CourseItemDTO;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetCoursesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-courses-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(CourseServiceInterface $courseService, CourseRepositoryInterface $repository): void
    {
        $latestCoursesData = $repository->getLatest();

        if (!$courseService->checkCoursesValidToday($latestCoursesData) || empty($latestCoursesData)) {
            $latestCoursesData = $courseService->fetchCourses();

            $repository->store([
                'date' => Carbon::create($latestCoursesData->getDate()),
                'data' => json_encode(
                    array_map(fn(CourseItemDTO $valute) => $valute->toArray(), $latestCoursesData->getCurrency())
                ),
            ]);
        }
    }
}
