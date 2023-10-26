<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

class SendersResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private readonly string $sender,
        private readonly bool $verified,
        private readonly bool $checked,
        private readonly bool $registered,
    ) {
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function isVerified(): bool
    {
        return $this->verified;
    }

    public function isChecked(): bool
    {
        return $this->checked;
    }

    public function isRegistered(): bool
    {
        return $this->registered;
    }
}
