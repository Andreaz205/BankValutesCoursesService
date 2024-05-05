<?php

namespace App\Services\Logger;

interface LoggerInterface
{
    static public function error(\Throwable $exception, array $extra = []): void;
}
