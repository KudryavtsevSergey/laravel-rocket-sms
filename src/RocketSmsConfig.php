<?php

namespace Sun\RocketSms;

use Illuminate\Contracts\Config\Repository as Config;

class RocketSmsConfig
{
    public function __construct(
        private Config $config,
    ) {
    }

    public function getGateway(): ?string
    {
        return $this->config->get('rocketsms.gateway');
    }

    public function getUsername(): ?string
    {
        return $this->config->get('rocketsms.username');
    }

    public function getPassword(): ?string
    {
        return $this->config->get('rocketsms.password');
    }
}
