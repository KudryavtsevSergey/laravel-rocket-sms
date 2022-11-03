<?php

namespace Sun\RocketSms\Dto\RequestDto;

class SendRequestDto implements RequestDtoInterface
{
    public function __construct(
        private string $phone,
        private string $text,
        private ?string $sender = null,
        private ?int $timestamp = null,
        private ?bool $priority = null,
    ) {
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    public function getPriority(): ?bool
    {
        return $this->priority;
    }
}
