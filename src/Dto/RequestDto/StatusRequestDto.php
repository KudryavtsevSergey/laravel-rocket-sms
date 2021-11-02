<?php

namespace Sun\RocketSms\Dto\RequestDto;

class StatusRequestDto implements RequestDtoInterface
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
