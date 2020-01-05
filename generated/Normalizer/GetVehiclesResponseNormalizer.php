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
class GetVehiclesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\GetVehiclesResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\GetVehiclesResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\GetVehiclesResponse();
        if (property_exists($data, 'response')) {
            $values = array();
            foreach ($data->{'response'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tesla\\Api\\Model\\Vehicle', 'json', $context);
            }
            $object->setResponse($values);
        }
        if (property_exists($data, 'count')) {
            $object->setCount($data->{'count'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getResponse()) {
            $values = array();
            foreach ($object->getResponse() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'response'} = $values;
        }
        if (null !== $object->getCount()) {
            $data->{'count'} = $object->getCount();
        }
        return $data;
    }
}