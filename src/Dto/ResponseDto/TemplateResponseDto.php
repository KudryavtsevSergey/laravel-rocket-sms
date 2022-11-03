<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class TemplateResponseDto implements ResponseDtoInterface
{
    public function __construct(
        private string $tplId,
        private string $text,
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
