<?php

namespace Sun\RocketSms;

use Illuminate\Support\ServiceProvider;

class RocketSmsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerPublishing();
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/rocketsms.php' => config_path('rocketsms.php')
            ], 'rocketsms-config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/rocketsms.php', 'rocketsms');

        $this->app->singleton(Facade::FACADE_ACCESSOR, RocketSms::class);
    }
}
