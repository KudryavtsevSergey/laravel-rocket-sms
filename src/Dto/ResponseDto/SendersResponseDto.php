<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class SendersResponseDto implements ResponseDtoInterface
{
    private string $sender;
    private bool $verified;
    private bool $checked;
    private bool $registered;

    public function __construct(string $sender, bool $verified, bool $checked, bool $registered)
    {
        $this->sender = $sender;
        $this->verified = $verified;
        $this->checked = $checked;
        $this->registered = $registered;
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
