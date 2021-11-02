<?php

namespace Sun\RocketSms\Dto\RequestDto;

class SendRequestDto implements RequestDtoInterface
{
    private string $phone;
    private string $text;
    private ?string $sender;
    private ?int $timestamp;
    private ?bool $priority;

    public function __construct(
        string $phone,
        string $text,
        ?string $sender = null,
        ?int $timestamp = null,
        ?bool $priority = null
    ) {
        $this->phone = $phone;
        $this->text = $text;
        $this->sender = $sender;
        $this->timestamp = $timestamp;
        $this->priority = $priority;
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
