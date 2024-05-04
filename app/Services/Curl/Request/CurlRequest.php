<?php

namespace App\Services\Curl\Request;

use App\Services\Curl\UserAgent\CurlUserAgent;
use Illuminate\Validation\UnauthorizedException;

class CurlRequest
{
    /**
     * Конструктор класса CurlRequest
     *
     * @param CurlUserAgent $curlUserAgent
     */
    public function __construct(
        private CurlUserAgent $curlUserAgent,
    )
    {
        // nothing
    }

    /**
     * GET request
     *
     * @param string $url
     * @param array $params
     * @param array|null $headers
     * @param bool $useProxy
     * @return string|bool|null
     * @throws \Exception
     */
    public function GET(string $url, array $params, ?array $headers = [], bool $useProxy = false): string|bool|null
    {
        $curlHandle = curl_init($url . '?' . http_build_query($params));

        return $this->execute($curlHandle, $headers, $useProxy);
    }

    /**
     * POST request
     *
     * @param string $url
     * @param array|null $data
     * @param array|null $headers
     * @param bool $useProxy
     * @return string|bool|null
     * @throws \Exception
     */
    public function POST(string $url, ?array $data, ?array $headers = [], bool $useProxy = false): string|bool|null
    {
        $curlHandle = curl_init($url);

        curl_setopt(
            $curlHandle,
            CURLOPT_POSTFIELDS,
            !empty($data) ? json_encode($data) : null
        );

        return $this->execute($curlHandle, $headers, $useProxy);
    }

    /**
     * Выполняем curl запрос
     *
     * @param \CurlHandle $curlHandle
     * @param array|null $headers
     * @param bool $useProxy
     * @return string|bool|null
     * @throws \Exception
     */
    private function execute(\CurlHandle $curlHandle, ?array $headers = [], bool $useProxy = false): string|bool|null
    {
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curlHandle, CURLOPT_USERAGENT, $this->curlUserAgent->getRandom()->userAgent);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 60);

        if (!empty($headers)) {
            curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
        }

        /**
         * Cookies:
         * curl_setopt($curlHandle, CURLOPT_COOKIEJAR, realpath(__DIR__ . '/temp/cookie.txt'));
         * curl_setopt($curlHandle, CURLOPT_COOKIEFILE, realpath(__DIR__ . '/temp/cookie.txt'));
         */

        $response = curl_exec($curlHandle);

        if ($response === false) {
            throw new \Exception(curl_error($curlHandle));
        }

        if (in_array(curl_getinfo($curlHandle, CURLINFO_HTTP_CODE), [401, 403])) {
            throw new UnauthorizedException();
        }

        if (curl_getinfo($curlHandle, CURLINFO_HTTP_CODE) !== 200) {
            throw new \Exception(
                'Curl response code ' . curl_getinfo($curlHandle, CURLINFO_HTTP_CODE),
                curl_getinfo($curlHandle, CURLINFO_HTTP_CODE)
            );
        }

        curl_close($curlHandle);

        return $response;
    }
}
