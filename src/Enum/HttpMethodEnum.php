<?php

namespace Sun\RocketSms\Enum;

class HttpMethodEnum extends AbstractEnum
{
    public const GET = 'GET';
    public const POST = 'POST';

    public static function getValues(): array
    {
        return [
            self::GET,
            self::POST,
        ];
    }
}
