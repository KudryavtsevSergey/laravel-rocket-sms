<?php

namespace Sun\RocketSms\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Sun\RocketSms\Dto\RequestDto\RequestDtoInterface;
use Sun\RocketSms\Dto\ResponseDto\ResponseDtoInterface;
use Sun\RocketSms\Enum\HttpMethodEnum;
use Sun\RocketSms\Exceptions\InternalError;
use Sun\RocketSms\Mapper\ArrayObjectMapper;
use Sun\RocketSms\RocketSmsConfig;

class RocketSmsHttpClientService
{
    private ArrayObjectMapper $arrayObjectMapper;
    private RocketSmsConfig $config;
    private Client $client;

    public function __construct(ArrayObjectMapper $arrayObjectMapper, RocketSmsConfig $config)
    {
        $this->arrayObjectMapper = $arrayObjectMapper;
        $this->client = new Client([
            'base_uri' => $config->getGateway(),
        ]);
        $this->config = $config;
    }

    public function request(
        string $method,
        string $path,
        string $responseType,
        ?RequestDtoInterface $requestDto = null
    ): ResponseDtoInterface|array {
        HttpMethodEnum::checkAllowedValue($method);
        try {
            $data = $requestDto ? $this->arrayObjectMapper->serialize($requestDto) : [];
            $formParams = array_merge($data, [
                'username' => $this->config->getUsername(),
                'password' => md5($this->config->getPassword()),
            ]);

            $response = $this->client->request($method, $path, [
                RequestOptions::FORM_PARAMS => $formParams,
            ]);

            $data = $this->encodeResponse((string)$response->getBody());
            return $this->arrayObjectMapper->deserialize($data, $responseType);
        } catch (GuzzleException $e) {
            throw new InternalError('Error sending request', $e);
        }
    }

    private function encodeResponse(string $body): array
    {
        return json_decode($body, true);
    }
}
