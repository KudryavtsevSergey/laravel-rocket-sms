<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

class BalanceResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private readonly int $credits,
        private readonly float $balance,
    ) {
    }

    public function getCredits(): int
    {
        return $this->credits;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
