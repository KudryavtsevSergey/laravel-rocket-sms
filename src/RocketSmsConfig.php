<?php

namespace Sun\RocketSms;

use Illuminate\Contracts\Config\Repository as Config;

class RocketSmsConfig
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
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
