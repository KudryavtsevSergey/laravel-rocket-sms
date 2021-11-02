<?php

namespace Sun\RocketSms;

use Sun\RocketSms\Service\RocketSmsApiService;

class RocketSms
{
    private RocketSmsApiService $rocketSmsApiService;

    public function __construct(RocketSmsApiService $rocketSmsApiService)
    {
        $this->rocketSmsApiService = $rocketSmsApiService;
    }

    public function apiService(): RocketSmsApiService
    {
        return $this->rocketSmsApiService;
    }
}
