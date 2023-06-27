<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

class AddSenderResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private string $status,
    ) {
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
