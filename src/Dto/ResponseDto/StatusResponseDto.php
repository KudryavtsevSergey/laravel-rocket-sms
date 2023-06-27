<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

use Sun\RocketSms\Enum\MessageStatusEnum;

class StatusResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private int $id,
        private string $status,
    ) {
        MessageStatusEnum::checkAllowedValue($status);
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
