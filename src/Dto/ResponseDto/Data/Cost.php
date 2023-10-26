<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto\Data;

class Cost
{
    public function __construct(
        private readonly int $credits,
        private readonly float $money,
    ) {
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
