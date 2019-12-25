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
class VehicleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\Vehicle';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\Vehicle';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\Vehicle();
        if (property_exists($data, 'color')) {
            $object->setColor($data->{'color'});
        }
        if (property_exists($data, 'display_name')) {
            $object->setDisplayName($data->{'display_name'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'option_codes')) {
            $object->setOptionCodes($data->{'option_codes'});
        }
        if (property_exists($data, 'vehicle_id')) {
            $object->setVehicleId($data->{'vehicle_id'});
        }
        if (property_exists($data, 'vin')) {
            $object->setVin($data->{'vin'});
        }
        if (property_exists($data, 'tokens')) {
            $values = array();
            foreach ($data->{'tokens'} as $value) {
                $values[] = $value;
            }
            $object->setTokens($values);
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'color'} = $object->getColor();
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getOptionCodes()) {
            $data->{'option_codes'} = $object->getOptionCodes();
        }
        if (null !== $object->getVehicleId()) {
            $data->{'vehicle_id'} = $object->getVehicleId();
        }
        if (null !== $object->getVin()) {
            $data->{'vin'} = $object->getVin();
        }
        if (null !== $object->getTokens()) {
            $values = array();
            foreach ($object->getTokens() as $value) {
                $values[] = $value;
            }
            $data->{'tokens'} = $values;
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        return $data;
    }
}