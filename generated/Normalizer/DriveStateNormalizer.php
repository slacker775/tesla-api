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
class DriveStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\DriveState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\DriveState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\DriveState();
        if (property_exists($data, 'shift_state')) {
            $object->setShiftState($data->{'shift_state'});
        }
        if (property_exists($data, 'speed')) {
            $object->setSpeed($data->{'speed'});
        }
        if (property_exists($data, 'power')) {
            $object->setPower($data->{'power'});
        }
        if (property_exists($data, 'latitude')) {
            $object->setLatitude($data->{'latitude'});
        }
        if (property_exists($data, 'longitude')) {
            $object->setLongitude($data->{'longitude'});
        }
        if (property_exists($data, 'heading')) {
            $object->setHeading($data->{'heading'});
        }
        if (property_exists($data, 'gps_as_of')) {
            $object->setGpsAsOf($data->{'gps_as_of'});
        }
        if (property_exists($data, 'native_location_supported')) {
            $object->setNativeLocationSupported($data->{'native_location_supported'});
        }
        if (property_exists($data, 'native_latitude')) {
            $object->setNativeLatitude($data->{'native_latitude'});
        }
        if (property_exists($data, 'native_longitude')) {
            $object->setNativeLongitude($data->{'native_longitude'});
        }
        if (property_exists($data, 'native_type')) {
            $object->setNativeType($data->{'native_type'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'shift_state'} = $object->getShiftState();
        $data->{'speed'} = $object->getSpeed();
        $data->{'power'} = $object->getPower();
        $data->{'latitude'} = $object->getLatitude();
        $data->{'longitude'} = $object->getLongitude();
        $data->{'heading'} = $object->getHeading();
        $data->{'gps_as_of'} = $object->getGpsAsOf();
        $data->{'native_location_supported'} = $object->getNativeLocationSupported();
        $data->{'native_latitude'} = $object->getNativeLatitude();
        $data->{'native_longitude'} = $object->getNativeLongitude();
        $data->{'native_type'} = $object->getNativeType();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}