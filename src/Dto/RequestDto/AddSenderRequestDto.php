<?php

namespace Sun\RocketSms\Dto\RequestDto;

class AddSenderRequestDto implements RequestDtoInterface
{
    private string $sender;

    public function __construct(string $sender)
    {
        $this->sender = $sender;
    }

    public function getSender(): string
    {
        return $this->sender;
    }
}
