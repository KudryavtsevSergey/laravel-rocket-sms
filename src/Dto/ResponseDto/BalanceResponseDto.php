<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class BalanceResponseDto implements ResponseDtoInterface
{
    private int $credits;
    private float $balance;

    public function __construct(int $credits, float $balance)
    {
        $this->credits = $credits;
        $this->balance = $balance;
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
