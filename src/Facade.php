<?php

declare(strict_types=1);

namespace Sun\RocketSms;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\RocketSms\Service\RocketSmsApiService;

/**
 * @method static RocketSmsApiService apiService()
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'RocketSms';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
