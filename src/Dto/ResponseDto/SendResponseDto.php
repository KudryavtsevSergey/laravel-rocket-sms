<?php

namespace Sun\RocketSms\Dto\ResponseDto;

use Sun\RocketSms\Dto\ResponseDto\Data\Cost;

class SendResponseDto extends StatusResponseDto
{
    public function __construct(
        int $id,
        string $status,
        private Cost $cost,
    ) {
        parent::__construct($id, $status);
    }

    public function getCost(): Cost
    {
        return $this->cost;
    }
}
