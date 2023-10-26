<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

use Sun\RocketSms\Dto\ResponseDto\Data\Cost;

class SendResponseDto extends StatusResponseDto
{
    public function __construct(
        int $id,
        string $status,
        private readonly Cost $cost,
    ) {
        parent::__construct($id, $status);
    }

    public function getCost(): Cost
    {
        return $this->cost;
    }
}
