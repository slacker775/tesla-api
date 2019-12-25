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
class VehicleStateSpeedLimitModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleStateSpeedLimitMode';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleStateSpeedLimitMode';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\VehicleStateSpeedLimitMode();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'current_limit_mph')) {
            $object->setCurrentLimitMph($data->{'current_limit_mph'});
        }
        if (property_exists($data, 'max_limit_mph')) {
            $object->setMaxLimitMph($data->{'max_limit_mph'});
        }
        if (property_exists($data, 'min_limit_mph')) {
            $object->setMinLimitMph($data->{'min_limit_mph'});
        }
        if (property_exists($data, 'pin_code_set')) {
            $object->setPinCodeSet($data->{'pin_code_set'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        }
        if (null !== $object->getCurrentLimitMph()) {
            $data->{'current_limit_mph'} = $object->getCurrentLimitMph();
        }
        if (null !== $object->getMaxLimitMph()) {
            $data->{'max_limit_mph'} = $object->getMaxLimitMph();
        }
        if (null !== $object->getMinLimitMph()) {
            $data->{'min_limit_mph'} = $object->getMinLimitMph();
        }
        if (null !== $object->getPinCodeSet()) {
            $data->{'pin_code_set'} = $object->getPinCodeSet();
        }
        return $data;
    }
}