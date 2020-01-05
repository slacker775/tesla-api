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
class VehicleStateSoftwareUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleStateSoftwareUpdate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleStateSoftwareUpdate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\VehicleStateSoftwareUpdate();
        if (property_exists($data, 'expected_duration_sec')) {
            $object->setExpectedDurationSec($data->{'expected_duration_sec'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'download_perc')) {
            $object->setDownloadPerc($data->{'download_perc'});
        }
        if (property_exists($data, 'install_perc')) {
            $object->setInstallPerc($data->{'install_perc'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getExpectedDurationSec()) {
            $data->{'expected_duration_sec'} = $object->getExpectedDurationSec();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getDownloadPerc()) {
            $data->{'download_perc'} = $object->getDownloadPerc();
        }
        if (null !== $object->getInstallPerc()) {
            $data->{'install_perc'} = $object->getInstallPerc();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        return $data;
    }
}