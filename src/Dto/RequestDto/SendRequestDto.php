<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\RequestDto;

class SendRequestDto implements RequestDtoInterface
{
    public function __construct(
        private readonly string $phone,
        private readonly string $text,
        private readonly ?string $sender = null,
        private readonly ?int $timestamp = null,
        private readonly ?bool $priority = null,
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
