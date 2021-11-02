<?php

namespace Sun\RocketSms;

use Illuminate\Support\ServiceProvider;

class RocketSmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rocketsms.php' => config_path('rocketsms.php')
        ], 'rocketsms-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/rocketsms.php', 'rocketsms');

        $this->app->singleton(Facade::FACADE_ACCESSOR, RocketSms::class);
    }
}
