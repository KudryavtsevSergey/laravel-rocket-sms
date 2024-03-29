<?php

declare(strict_types=1);

namespace Sun\RocketSms\Dto\ResponseDto;

class TemplateResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private readonly string $tplId,
        private readonly string $text,
    ) {
    }

    public function getTplId(): string
    {
        return $this->tplId;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
