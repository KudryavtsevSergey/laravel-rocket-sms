<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class BalanceResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private int $credits,
        private float $balance,
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
