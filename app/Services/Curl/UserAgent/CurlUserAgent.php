<?php

namespace App\Services\Curl\UserAgent;

use App\Entity\UserAgent;
use Illuminate\Support\Facades\Log;

class CurlUserAgent
{
    /**
     * Вернем случайны юзер-агент
     *
     * @return UserAgent
     */
    public function getRandom(): UserAgent
    {
        try {
            $list = $this->getAll();
            $item = $list[rand(0, count($list) - 1)];

            return new UserAgent($item['user_agent'], $item['browser'], $item['os']);
        } catch (\Throwable $e) {
            Log::error($e);

            return new UserAgent(
                'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'Chrome 74',
                'Windows'
            );
        }
    }

    /**
     * Вернем массив с всем списком доступных юзер-агентов
     *
     * @return \string[][]
     */
    private function getAll(): array
    {
        return [
            [
                'user_agent' => 'Mozilla/5.0 CK={} (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
                'browser' => 'Chrome 72',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134',
                'browser' => 'Edge 42',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/18.17763',
                'browser' => 'Edge 44',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; KTXN)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
                'browser' => 'Firefox 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0',
                'browser' => 'Firefox 54',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
                'browser' => 'Firefox 40.1',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36',
                'browser' => 'Chrome 44',
                'os' => 'Linux',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)',
                'browser' => 'Internet Explorer 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/16D57',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
                'browser' => 'Chrome 72',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/605.1.15 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0',
                'browser' => 'Firefox 18',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.4 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; 125LA; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.18362',
                'browser' => 'Edge 44',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Linux; U; Android 2.2) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
                'browser' => 'Android Browser 4',
                'os' => 'Android',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.71 Safari/537.36',
                'browser' => 'Chrome 46',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.83 Safari/537.1',
                'browser' => 'Chrome 21',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'browser' => 'Chrome 69',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
                'browser' => 'Chrome 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393',
                'browser' => 'Edge 38',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.18363',
                'browser' => 'Edge 44',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_1_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36',
                'browser' => 'Chrome 78',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/605.1.15 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 9_3_5 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Mobile/13G36',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063',
                'browser' => 'Edge 40',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36',
                'browser' => 'Chrome 84',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36',
                'browser' => 'Chrome 67',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:36.0) Gecko/20100101 Firefox/36.0',
                'browser' => 'Firefox 36',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36',
                'browser' => 'Chrome 81',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
                'browser' => 'Chrome 83',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:33.0) Gecko/20100101 Firefox/33.0',
                'browser' => 'Firefox 33',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Safari/605.1.15',
                'browser' => 'Safari 13.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 11',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299',
                'browser' => 'Edge 41',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36',
                'browser' => 'Chrome 68',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
                'browser' => 'Chrome 72',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0',
                'browser' => 'Firefox 66',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2)',
                'browser' => 'Internet Explorer 10',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
                'browser' => 'Chrome 65',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0',
                'browser' => 'Firefox 50',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15',
                'browser' => 'Safari 12.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0',
                'browser' => 'Firefox 52',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',
                'browser' => 'Internet Explorer 10',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'browser' => 'Chrome 69',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:67.0) Gecko/20100101 Firefox/67.0',
                'browser' => 'Firefox 67',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36',
                'browser' => 'Chrome 64',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
                'browser' => 'Chrome 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36',
                'browser' => 'Chrome 57',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'browser' => 'Chrome 61',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Linux; Android 6.0.1; RedMi Note 5 Build/RB3N5C; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36',
                'browser' => 'Chrome 68',
                'os' => 'Android',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0',
                'browser' => 'Firefox 50',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)',
                'browser' => 'Internet Explorer 10',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36',
                'browser' => 'Chrome 76',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506)',
                'browser' => 'Internet Explorer 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0',
                'browser' => 'Firefox 61',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36',
                'browser' => 'Chrome 58',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0',
                'browser' => 'Firefox 43',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
                'browser' => 'Internet Explorer 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36',
                'browser' => 'Chrome 67',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36',
                'browser' => 'Chrome 78',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (en-us) AppleWebKit/534.14 (KHTML, like Gecko; Google Wireless Transcoder) Chrome/9.0.597 Safari/534.14 wimb_monitor.py/1.0',
                'browser' => 'Chrome 9',
                'os' => '--',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 9_3_5 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G36 Safari/601.1',
                'browser' => 'Safari 9',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0',
                'browser' => 'Firefox 24',
                'os' => 'Linux',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.0.3705)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36',
                'browser' => 'Chrome 49',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-en) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4',
                'browser' => 'Safari 5',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15G77',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36',
                'browser' => 'Chrome 36',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1.2 Safari/605.1.15',
                'browser' => 'Safari 11.1',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15',
                'browser' => 'Safari 13',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36 (+https://whatis.contentkingapp.com)',
                'browser' => 'Chrome 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Safari/537.36',
                'browser' => 'Chrome 84',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
                'browser' => 'Chrome 75',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 11',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7',
                'browser' => 'Firefox 1.0',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36',
                'browser' => 'Chrome 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36',
                'browser' => 'Chrome 59',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0',
                'browser' => 'Firefox 17',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36',
                'browser' => 'Chrome 66',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0',
                'browser' => 'Firefox 73',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.0 Mobile/14G60 Safari/602.1',
                'browser' => 'Safari 10',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.2 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36',
                'browser' => 'Chrome 75',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.0; rv:34.0) Gecko/20100101 Firefox/34.0',
                'browser' => 'Firefox 34',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36',
                'browser' => 'Chrome 81',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36',
                'browser' => 'Chrome 83',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)',
                'browser' => 'Internet Explorer 5',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0',
                'browser' => 'Firefox 54',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15',
                'browser' => 'Safari 12.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
                'browser' => 'Chrome 65',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',
                'browser' => 'Chrome 42',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586',
                'browser' => 'Edge 25',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],


            [
                'user_agent' => 'Mozilla/5.0 (Linux; Android 7.1.2; AFTMM Build/NS6265; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.110 Mobile Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Android',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36',
                'browser' => 'Chrome 66',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0',
                'browser' => 'Firefox 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)',
                'browser' => 'Internet Explorer 10',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
                'browser' => 'Chrome 72',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'browser' => 'Chrome 62',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.1)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; rv:17.0) Gecko/20100101 Firefox/20.6.14',
                'browser' => 'Firefox 20.6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0',
                'browser' => 'Firefox 59',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:30.0) Gecko/20100101 Firefox/30.0',
                'browser' => 'Firefox 30',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'browser' => 'Firefox 33',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31',
                'browser' => 'Chrome 26',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0',
                'browser' => 'Firefox 52',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'browser' => 'Firefox 29',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0',
                'browser' => 'Firefox 38',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 11',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.8 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25',
                'browser' => 'Safari 6',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0',
                'browser' => 'Firefox 47',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/16C101',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:41.0) Gecko/20100101 Firefox/41.0',
                'browser' => 'Firefox 41',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_2_6 like Mac OS X) AppleWebKit/604.5.6 (KHTML, like Gecko) Version/11.0 Mobile/15D100 Safari/604.1',
                'browser' => 'Safari 11',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0',
                'browser' => 'Firefox 62',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
                'browser' => 'Chrome 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',
                'browser' => 'Firefox 45',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko',
                'browser' => 'Internet Explorer 11',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; Win32; WinHttp.WinHttpRequest.5)',
                'browser' => 'Netscape Navigator 4',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15',
                'browser' => 'Safari 12.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0',
                'browser' => 'Firefox 58',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.76 Safari/537.36',
                'browser' => 'Chrome 56',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_2_1 like Mac OS X) AppleWebKit/602.4.6 (KHTML, like Gecko) Version/10.0 Mobile/14D27 Safari/602.1',
                'browser' => 'Safari 10',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36',
                'browser' => 'Chrome 59',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36',
                'browser' => 'Chrome 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 13',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36',
                'browser' => 'Chrome 71',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36',
                'browser' => 'Chrome 47',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows IoT 10.0; Android 6.0.1; WebView/3.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Mobile Safari/537.36 Edge/17.17134',
                'browser' => 'Edge 42',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15',
                'browser' => 'Safari 13.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.10) Gecko/20050716 Firefox/1.0.6',
                'browser' => 'Firefox 1.0',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Safari/537.36',
                'browser' => 'Chrome 81',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0',
                'browser' => 'Firefox 44',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0',
                'browser' => 'Firefox 58',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1.2 Safari/605.1.15',
                'browser' => 'Safari 11.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7',
                'browser' => 'Safari 9.1',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.0 Mobile/14G60 Safari/602.1',
                'browser' => 'Safari 10',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 4.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2049.0 Safari/537.36',
                'browser' => 'Chrome 37',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36',
                'browser' => 'Chrome 41',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1 Safari/605.1.15',
                'browser' => 'Safari 11.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
                'browser' => 'Chrome 52',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0',
                'browser' => 'Firefox 57',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Safari/605.1.15',
                'browser' => 'Safari 13.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Mobile/14G60',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0',
                'browser' => 'Firefox 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0',
                'browser' => 'Firefox 73',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:52.0) Gecko/20100101 Firefox/52.0',
                'browser' => 'Firefox 52',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.4 Safari/605.1.15',
                'browser' => 'Safari 13',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4; de-de) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1',
                'browser' => 'Safari 3.1',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36',
                'browser' => 'Chrome 55',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36',
                'browser' => 'Chrome 64',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36',
                'browser' => 'Chrome 57',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36',
                'browser' => 'Chrome 73',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0',
                'browser' => 'Firefox 58',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'browser' => 'Chrome 69',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36 Edg/84.0.522.52',
                'browser' => 'Edge 84',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2',
                'browser' => 'Firefox 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:79.0) Gecko/20100101 Firefox/79.0',
                'browser' => 'Firefox 79',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0',
                'browser' => 'Firefox 71',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:63.0) Gecko/20100101 Firefox/63.0',
                'browser' => 'Firefox 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0',
                'browser' => 'Firefox 75',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36',
                'browser' => 'Chrome 58',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0',
                'browser' => 'Firefox 51',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:29.0) Gecko/20100101 Firefox/29.0',
                'browser' => 'Firefox 29',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20070308 Minefield/3.0a1',
                'browser' => 'Minefield 3',
                'os' => 'Linux',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36',
                'browser' => 'Chrome 31',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0',
                'browser' => 'Firefox 72',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36',
                'browser' => 'Chrome 67',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko)',
                'browser' => 'Webkit based browser ',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 7',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0',
                'browser' => 'Firefox 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15',
                'browser' => 'Safari 13',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
                'browser' => 'Chrome 62',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:68.0) Gecko/20100101 Firefox/68.0',
                'browser' => 'Firefox 68',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'browser' => 'Chrome 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:76.0) Gecko/20100101 Firefox/76.0',
                'browser' => 'Firefox 76',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0)',
                'browser' => 'Internet Explorer 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0',
                'browser' => 'Firefox 60',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060909 Firefox/1.5.0.7',
                'browser' => 'Firefox 1.5',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0',
                'browser' => 'Firefox 47',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)',
                'browser' => 'Internet Explorer 5',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_1) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15',
                'browser' => 'Safari 13',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8',
                'browser' => 'Safari 10.1',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0',
                'browser' => 'Firefox 36',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36',
                'browser' => 'Chrome 70',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36',
                'browser' => 'Chrome 64',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:43.0) Gecko/20100101 Firefox/43.0',
                'browser' => 'Firefox 43',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0',
                'browser' => 'Firefox 46',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
                'browser' => 'Chrome 63',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.87 Safari/537.36',
                'browser' => 'Chrome 78',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0',
                'browser' => 'Firefox 59',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/16A404',
                'browser' => 'Webkit based browser ',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:65.0) Gecko/20100101 Firefox/65.0',
                'browser' => 'Firefox 65',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',
                'browser' => 'Chrome 83',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0',
                'browser' => 'Firefox 74',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36',
                'browser' => 'Chrome 55',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15',
                'browser' => 'Safari 12',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36',
                'browser' => 'Chrome 80',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_2 like Mac OS X) AppleWebKit/603.2.4 (KHTML, like Gecko) Version/10.0 Mobile/14F89 Safari/602.1',
                'browser' => 'Safari 10',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0',
                'browser' => 'Firefox 39',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',
                'browser' => 'Firefox 40',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.1 Safari/605.1.15',
                'browser' => 'Safari 12',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)',
                'browser' => 'Internet Explorer 8',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36',
                'browser' => 'Chrome 51',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/601.7.8 (KHTML, like Gecko) Version/9.1.3 Safari/537.86.7',
                'browser' => 'Safari 9.1',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; FunWebProducts)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)',
                'browser' => 'AOL Browser 9',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:77.0) Gecko/20100101 Firefox/77.0',
                'browser' => 'Firefox 77',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:32.0) Gecko/20100101 Firefox/32.0',
                'browser' => 'Firefox 32',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/604.5.6 (KHTML, like Gecko) Version/11.0.3 Safari/604.5.6',
                'browser' => 'Safari 11',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.78.2 (KHTML, like Gecko) Version/6.1.6 Safari/537.78.2',
                'browser' => 'Safari 6.1',
                'os' => 'Mac OS X',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 5.1; rv:42.0) Gecko/20100101 Firefox/42.0',
                'browser' => 'Firefox 42',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0',
                'browser' => 'Firefox 62',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.3 Safari/605.1.15',
                'browser' => 'Safari 12',
                'os' => 'macOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'browser' => 'Chrome 69',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0',
                'browser' => 'Firefox 78',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0',
                'browser' => 'Firefox 48',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Linux; Android 7.1.2; AFTMM Build/NS6264; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36',
                'browser' => 'Chrome 59',
                'os' => 'Android',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (iPad; CPU OS 12_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1',
                'browser' => 'Safari 12.1',
                'os' => 'iOS',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.8) Gecko/20050511 Firefox/1.0.4',
                'browser' => 'Firefox 1.0',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; Media Center PC 6.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; .NET4.0C; .NET4.0E)',
                'browser' => 'Internet Explorer 8',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0',
                'browser' => 'Firefox 69',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.1) Gecko/20060111 Firefox/1.5.0.1',
                'browser' => 'Firefox 1.5',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/6.0)',
                'browser' => 'Internet Explorer 10',
                'os' => 'Windows',
            ],
            [
                'user_agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)',
                'browser' => 'Internet Explorer 6',
                'os' => 'Windows',
            ],
        ];
    }
}
