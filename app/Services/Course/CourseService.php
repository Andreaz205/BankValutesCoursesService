<?php

declare(strict_types=1);

namespace App\Services\Course;

use App\Contracts\Repositories\CourseRepositoryInterface;
use App\Contracts\Services\CourseServiceInterface;
use App\DTO\CourseItemDTO;
use App\DTO\CoursesDataDTO;
use App\Services\Curl\CurlService;
use App\Services\Logger\LoggerInterface;
use Carbon\Carbon;

class CourseService implements CourseServiceInterface
{
    public function __construct(
        private readonly CourseRepositoryInterface $repository,
        private readonly CurlService $curlService,
        private readonly LoggerInterface $logger
    )
    {}

    public function getCoursesToday(): CoursesDataDTO
    {
        $latestCoursesData = $this->repository->getLatest();

        if ($this->checkCoursesValidToday($latestCoursesData)) {
            return $latestCoursesData;
        }

        if (empty($latestCoursesData)) {
            $latestCoursesData = $this->fetchCourses();

            $this->repository->store([
                'date' => Carbon::create($latestCoursesData->getDate()),
                'data' => json_encode(
                    array_map(fn (CourseItemDTO $valute) => $valute->toArray(), $latestCoursesData->getCurrency())
                ),
            ]);
        }

        return $latestCoursesData;
    }

    public function fetchCourses(): CoursesDataDTO
    {
        try {
            $response = $this->curlService->request()->GET(config('courses.valutes-url'), []);

            $xml = simplexml_load_string($response);

            $json = json_encode($xml);

            $array = json_decode($json,TRUE);
        } catch (\Exception $e) {
            $this->logger::error($e);
        }

        $latestCoursesData = new CoursesDataDTO();
        $latestCoursesData->setDate(str_replace('.', '-', $array['@attributes']['Date']));

        $courses = [];
        foreach ($array['Valute'] as $valute) {
            $itemDto = new CourseItemDTO(
                id:        $valute['@attributes']['ID'],
                numCode:   $valute['NumCode'],
                charCode:  $valute['CharCode'],
                nominal:   $valute['Nominal'],
                name:      $valute['Name'],
                value:     $valute['Value'],
                vunitRate: $valute['VunitRate'],
            );

            $courses[] = $itemDto;
        }
        $latestCoursesData->setCurrency($courses);

        return $latestCoursesData;
    }

    public function checkCoursesValidToday(?CoursesDataDTO $latestCoursesData): bool
    {
        return !empty($latestCoursesData) && (abs(Carbon::now()->diffInDays(Carbon::create($latestCoursesData->getDate()))) < 1);
    }
}
