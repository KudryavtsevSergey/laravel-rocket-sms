<?php

declare(strict_types=1);

namespace Sun\RocketSms;

use Illuminate\Contracts\Config\Repository;

class RocketSmsConfig
{
    public function __construct(
        private Repository $config,
    ) {
    }

    public function getGateway(): string
    {
        return $this->config->get('rocketsms.gateway');
    }

    public function getUsername(): string
    {
        return $this->config->get('rocketsms.username');
    }

    public function getPassword(): string
    {
        return $this->config->get('rocketsms.password');
    }
}
