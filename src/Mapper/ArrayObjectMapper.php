<?php

namespace Sun\RocketSms\Mapper;

use Sun\RocketSms\Dto\RequestDto\RequestDtoInterface;
use Sun\RocketSms\Dto\ResponseDto\ResponseDtoInterface;
use Sun\RocketSms\Exceptions\InternalError;
use Symfony\Component\PropertyInfo\Extractor\ConstructorExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArrayObjectMapper
{
    private Serializer $serializer;

    public function __construct()
    {
        $phpDocExtractor = new PhpDocExtractor();
        $extractor = new PropertyInfoExtractor(
            typeExtractors: [new ConstructorExtractor([$phpDocExtractor]), $phpDocExtractor]
        );
        $normalizers = [
            new ObjectNormalizer(
                nameConverter: new CamelCaseToSnakeCaseNameConverter(),
                propertyTypeExtractor: $extractor
            ),
            new ArrayDenormalizer(),
        ];
        $this->serializer = new Serializer($normalizers);
    }

    public function serialize(RequestDtoInterface $model): array
    {
        try {
            return $this->serializer->normalize($model);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error normalize model to array', $e);
        }
    }

    /**
     * @param array $data
     * @param string $type
     * @return ResponseDtoInterface|ResponseDtoInterface[]
     */
    public function deserialize(array $data, string $type): ResponseDtoInterface|array
    {
        try {
            return $this->serializer->denormalize($data, $type, null, [
                AbstractNormalizer::ALLOW_EXTRA_ATTRIBUTES => true,
                AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
            ]);
        } catch (ExceptionInterface $e) {
            throw new InternalError('Error denormalize array to model', $e);
        }
    }
}
