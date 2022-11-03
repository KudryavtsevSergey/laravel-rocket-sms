<?php

namespace Sun\RocketSms\Dto\RequestDto;

class AddSenderRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $sender,
    ) {
    }

    public function getSender(): string
    {
        return $this->sender;
    }
}
