<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\RequestDto;

class AddSenderRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly string $sender,
    ) {
    }

    public function getSender(): string
    {
        return $this->sender;
    }
}
