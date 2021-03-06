<?php

namespace Sun\RocketSms\Service;

use Sun\RocketSms\Dto\RequestDto\AddSenderRequestDto;
use Sun\RocketSms\Dto\RequestDto\SendRequestDto;
use Sun\RocketSms\Dto\RequestDto\StatusRequestDto;
use Sun\RocketSms\Dto\ResponseDto\AddSenderResponseDto;
use Sun\RocketSms\Dto\ResponseDto\BalanceResponseDto;
use Sun\RocketSms\Dto\ResponseDto\SendersResponseDto;
use Sun\RocketSms\Dto\ResponseDto\SendResponseDto;
use Sun\RocketSms\Dto\ResponseDto\StatusResponseDto;
use Sun\RocketSms\Dto\ResponseDto\TemplateResponseDto;
use Sun\RocketSms\Enum\ApiEnum;
use Sun\RocketSms\Enum\HttpMethodEnum;

class RocketSmsApiService
{
    private RocketSmsHttpClientService $httpClient;

    public function __construct(RocketSmsHttpClientService $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function send(SendRequestDto $sendRequestDto): SendResponseDto
    {
        /** @var SendResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::POST,
            ApiEnum::SEND,
            SendResponseDto::class,
            $sendRequestDto
        );
        return $responseDto;
    }

    public function status(StatusRequestDto $statusRequestDto): StatusResponseDto
    {
        /** @var StatusResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::GET,
            ApiEnum::STATUS,
            StatusResponseDto::class,
            $statusRequestDto
        );
        return $responseDto;
    }

    public function balance(): BalanceResponseDto
    {
        /** @var BalanceResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::GET,
            ApiEnum::BALANCE,
            BalanceResponseDto::class
        );
        return $responseDto;
    }

    /**
     * @return SendersResponseDto[]
     */
    public function senders(): array
    {
        /** @var SendersResponseDto[] $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::GET,
            ApiEnum::SENDERS,
            SendersResponseDto::class . '[]'
        );
        return $responseDto;
    }

    public function addSenders(AddSenderRequestDto $addSenderRequestDto): AddSenderResponseDto
    {
        /** @var AddSenderResponseDto $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::POST,
            ApiEnum::ADD_SENDERS,
            AddSenderResponseDto::class,
            $addSenderRequestDto
        );
        return $responseDto;
    }

    /**
     * @return TemplateResponseDto[]
     */
    public function templates(): array
    {
        /** @var TemplateResponseDto[] $responseDto */
        $responseDto = $this->httpClient->request(
            HttpMethodEnum::GET,
            ApiEnum::TEMPLATES,
            TemplateResponseDto::class
        );
        return $responseDto;
    }
}
