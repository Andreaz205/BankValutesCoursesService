<?php

namespace App\Entity;

class UserAgent
{
    /**
     * @param string $userAgent - user agent
     * @param string $browser - браузер
     * @param string $os - операционная система
     */
    public function __construct(
        public string $userAgent,
        public string $browser,
        public string $os
    )
    {
        // nothing
    }
}
