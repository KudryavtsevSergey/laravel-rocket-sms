<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class AddSenderResponseDto
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
