<?php

namespace App\Services\Logger;

use Illuminate\Support\Facades\Log;

class Logger implements LoggerInterface
{
    /**
     * Логирование ошибок
     *
     * @param \Throwable $exception
     * @param array $extra
     */
    static public function error(\Throwable $exception, array $extra = []): void
    {
        // do some logging logic
    }
}
