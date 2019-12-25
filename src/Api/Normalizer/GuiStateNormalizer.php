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
class GuiStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\GuiState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\GuiState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\GuiState();
        if (property_exists($data, 'gui_distance_units')) {
            $object->setGuiDistanceUnits($data->{'gui_distance_units'});
        }
        if (property_exists($data, 'gui_temperature_units')) {
            $object->setGuiTemperatureUnits($data->{'gui_temperature_units'});
        }
        if (property_exists($data, 'gui_charge_rate_units')) {
            $object->setGuiChargeRateUnits($data->{'gui_charge_rate_units'});
        }
        if (property_exists($data, 'gui_24_hour_time')) {
            $object->setGui24HourTime($data->{'gui_24_hour_time'});
        }
        if (property_exists($data, 'gui_range_display')) {
            $object->setGuiRangeDisplay($data->{'gui_range_display'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getGuiDistanceUnits()) {
            $data->{'gui_distance_units'} = $object->getGuiDistanceUnits();
        }
        if (null !== $object->getGuiTemperatureUnits()) {
            $data->{'gui_temperature_units'} = $object->getGuiTemperatureUnits();
        }
        if (null !== $object->getGuiChargeRateUnits()) {
            $data->{'gui_charge_rate_units'} = $object->getGuiChargeRateUnits();
        }
        if (null !== $object->getGui24HourTime()) {
            $data->{'gui_24_hour_time'} = $object->getGui24HourTime();
        }
        if (null !== $object->getGuiRangeDisplay()) {
            $data->{'gui_range_display'} = $object->getGuiRangeDisplay();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}