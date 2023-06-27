<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\RequestDto;

class StatusRequestDto implements RequestDtoInterface
{
    public function __construct(
        private int $id,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }
}
