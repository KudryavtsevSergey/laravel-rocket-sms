<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

class SendersResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private string $sender,
        private bool $verified,
        private bool $checked,
        private bool $registered,
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
