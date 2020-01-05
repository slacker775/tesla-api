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
class ShareRequestValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\ShareRequestValue';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\ShareRequestValue';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\ShareRequestValue();
        if (property_exists($data, 'android.intent.extra.TEXT')) {
            $object->setAndroidIntentExtraTEXT($data->{'android.intent.extra.TEXT'});
        }
        if (property_exists($data, 'lat')) {
            $object->setLat($data->{'lat'});
        }
        if (property_exists($data, 'long')) {
            $object->setLong($data->{'long'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAndroidIntentExtraTEXT()) {
            $data->{'android.intent.extra.TEXT'} = $object->getAndroidIntentExtraTEXT();
        }
        if (null !== $object->getLat()) {
            $data->{'lat'} = $object->getLat();
        }
        if (null !== $object->getLong()) {
            $data->{'long'} = $object->getLong();
        }
        return $data;
    }
}