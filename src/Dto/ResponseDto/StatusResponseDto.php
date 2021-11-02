<?php

namespace Sun\RocketSms\Dto\ResponseDto;

use Sun\RocketSms\Enum\MessageStatusEnum;

class StatusResponseDto implements ResponseDtoInterface
{
    private int $id;
    private string $status;

    public function __construct(int $id, string $status)
    {
        MessageStatusEnum::checkAllowedValue($status);
        $this->id = $id;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
