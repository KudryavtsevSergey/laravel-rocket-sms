<?php

namespace Sun\RocketSms\Enum;

class ApiEnum extends AbstractEnum
{
    public const SEND = 'simple/send';
    public const STATUS = 'simple/status';
    public const BALANCE = 'simple/balance';
    public const SENDERS = 'simple/senders';
    public const ADD_SENDERS = 'simple/senders/add';
    public const TEMPLATES = 'simple/templates';

    public static function getValues(): array
    {
        return [
            self::SEND,
            self::STATUS,
            self::BALANCE,
            self::SENDERS,
            self::ADD_SENDERS,
            self::TEMPLATES,
        ];
    }
}
