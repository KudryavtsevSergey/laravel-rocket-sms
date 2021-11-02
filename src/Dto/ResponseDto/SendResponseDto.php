<?php

namespace Sun\RocketSms\Dto\ResponseDto;

use Sun\RocketSms\Dto\ResponseDto\Data\Cost;

class SendResponseDto extends StatusResponseDto
{
    private Cost $cost;

    public function __construct(int $id, string $status, Cost $cost)
    {
        parent::__construct($id, $status);
        $this->cost = $cost;
    }

    public function getCost(): Cost
    {
        return $this->cost;
    }
}
