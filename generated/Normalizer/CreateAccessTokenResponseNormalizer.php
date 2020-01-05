<?php

namespace Tesla\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CreateAccessTokenResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\CreateAccessTokenResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\CreateAccessTokenResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\CreateAccessTokenResponse();
        if (property_exists($data, 'access_token')) {
            $object->setAccessToken($data->{'access_token'});
        }
        if (property_exists($data, 'token_type')) {
            $object->setTokenType($data->{'token_type'});
        }
        if (property_exists($data, 'expires_in')) {
            $object->setExpiresIn($data->{'expires_in'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt($data->{'created_at'});
        }
        if (property_exists($data, 'refresh_token')) {
            $object->setRefreshToken($data->{'refresh_token'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAccessToken()) {
            $data->{'access_token'} = $object->getAccessToken();
        }
        if (null !== $object->getTokenType()) {
            $data->{'token_type'} = $object->getTokenType();
        }
        if (null !== $object->getExpiresIn()) {
            $data->{'expires_in'} = $object->getExpiresIn();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        if (null !== $object->getRefreshToken()) {
            $data->{'refresh_token'} = $object->getRefreshToken();
        }
        return $data;
    }
}