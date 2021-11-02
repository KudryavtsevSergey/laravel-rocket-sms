<?php

namespace Sun\RocketSms\Dto\ResponseDto\Data;

class Cost
{
    private int $credits;
    private float $money;

    public function __construct(int $credits, float $money)
    {
        $this->credits = $credits;
        $this->money = $money;
    }

    public function getCredits(): int
    {
        return $this->credits;
    }

    public function getMoney(): float
    {
        return $this->money;
    }
}
