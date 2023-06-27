<?php

declare(strict_types=1);

namespace Sun\RocketSms;

use Sun\RocketSms\Service\RocketSmsApiService;

class RocketSms
{
    public function apiService(): RocketSmsApiService
    {
        return app(RocketSmsApiService::class);
    }
}
