<?php

namespace App\Services\Curl;

use App\Services\Curl\Request\CurlRequest;

class CurlService
{
    /**
     * Класс для работы с запросами
     *
     * @var CurlRequest
     */
    private CurlRequest $request;

    /**
     * Конструктор сервиса Curl
     *
     * @param CurlRequest $request
     */
    public function __construct(CurlRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Запросы
     *
     * @return CurlRequest
     */
    public function request(): CurlRequest
    {
        return $this->request;
    }
}
