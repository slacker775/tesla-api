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
class NearbyChargerResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\NearbyChargerResponseResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\NearbyChargerResponseResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\NearbyChargerResponseResponse();
        if (property_exists($data, 'congestion_sync_time_utc_secs')) {
            $object->setCongestionSyncTimeUtcSecs($data->{'congestion_sync_time_utc_secs'});
        }
        if (property_exists($data, 'destination_charging')) {
            $values = array();
            foreach ($data->{'destination_charging'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tesla\\Api\\Model\\DestinationCharger', 'json', $context);
            }
            $object->setDestinationCharging($values);
        }
        if (property_exists($data, 'superchargers')) {
            $values_1 = array();
            foreach ($data->{'superchargers'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Tesla\\Api\\Model\\Supercharger', 'json', $context);
            }
            $object->setSuperchargers($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCongestionSyncTimeUtcSecs()) {
            $data->{'congestion_sync_time_utc_secs'} = $object->getCongestionSyncTimeUtcSecs();
        }
        if (null !== $object->getDestinationCharging()) {
            $values = array();
            foreach ($object->getDestinationCharging() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'destination_charging'} = $values;
        }
        if (null !== $object->getSuperchargers()) {
            $values_1 = array();
            foreach ($object->getSuperchargers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'superchargers'} = $values_1;
        }
        return $data;
    }
}