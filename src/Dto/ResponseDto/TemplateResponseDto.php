<?php

namespace Sun\RocketSms\Dto\ResponseDto;

class TemplateResponseDto implements ResponseDtoInterface
{
    private string $tplId;
    private string $text;

    public function __construct(string $tplId, string $text)
    {
        $this->tplId = $tplId;
        $this->text = $text;
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
