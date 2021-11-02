<?php

namespace Sun\RocketSms\Enum;

class MessageStatusEnum extends AbstractEnum
{
    public const QUEUED = 'QUEUED';
    public const SENT = 'SENT';
    public const DELIVERED = 'DELIVERED';
    public const FAILED = 'FAILED';

    public static function getValues(): array
    {
        return [
            self::QUEUED,
            self::SENT,
            self::DELIVERED,
            self::FAILED,
        ];
    }
}
