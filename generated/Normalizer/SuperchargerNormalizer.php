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
class SuperchargerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\Supercharger';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\Supercharger';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\Supercharger();
        if (property_exists($data, 'location')) {
            $object->setLocation($this->denormalizer->denormalize($data->{'location'}, 'Tesla\\Api\\Model\\SuperchargerLocation', 'json', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'distance_miles')) {
            $object->setDistanceMiles($data->{'distance_miles'});
        }
        if (property_exists($data, 'available_stalls')) {
            $object->setAvailableStalls($data->{'available_stalls'});
        }
        if (property_exists($data, 'total_stalls')) {
            $object->setTotalStalls($data->{'total_stalls'});
        }
        if (property_exists($data, 'site_closed')) {
            $object->setSiteClosed($data->{'site_closed'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getDistanceMiles()) {
            $data->{'distance_miles'} = $object->getDistanceMiles();
        }
        if (null !== $object->getAvailableStalls()) {
            $data->{'available_stalls'} = $object->getAvailableStalls();
        }
        if (null !== $object->getTotalStalls()) {
            $data->{'total_stalls'} = $object->getTotalStalls();
        }
        if (null !== $object->getSiteClosed()) {
            $data->{'site_closed'} = $object->getSiteClosed();
        }
        return $data;
    }
}