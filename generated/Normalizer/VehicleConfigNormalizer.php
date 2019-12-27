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
class VehicleConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\VehicleConfig();
        if (property_exists($data, 'can_actuate_trunks')) {
            $object->setCanActuateTrunks($data->{'can_actuate_trunks'});
        }
        if (property_exists($data, 'can_accept_navigation_requests')) {
            $object->setCanAcceptNavigationRequests($data->{'can_accept_navigation_requests'});
        }
        if (property_exists($data, 'car_special_type')) {
            $object->setCarSpecialType($data->{'car_special_type'});
        }
        if (property_exists($data, 'car_type')) {
            $object->setCarType($data->{'car_type'});
        }
        if (property_exists($data, 'charge_port_type')) {
            $object->setChargePortType($data->{'charge_port_type'});
        }
        if (property_exists($data, 'eu_vehicle')) {
            $object->setEuVehicle($data->{'eu_vehicle'});
        }
        if (property_exists($data, 'exterior_color')) {
            $object->setExteriorColor($data->{'exterior_color'});
        }
        if (property_exists($data, 'has_ludicrous_mode')) {
            $object->setHasLudicrousMode($data->{'has_ludicrous_mode'});
        }
        if (property_exists($data, 'motorized_charge_port')) {
            $object->setMotorizedChargePort($data->{'motorized_charge_port'});
        }
        if (property_exists($data, 'perf_config')) {
            $object->setPerfConfig($data->{'perf_config'});
        }
        if (property_exists($data, 'plg')) {
            $object->setPlg($data->{'plg'});
        }
        if (property_exists($data, 'rear_seat_heaters')) {
            $object->setRearSeatHeaters($data->{'rear_seat_heaters'});
        }
        if (property_exists($data, 'rear_seat_type')) {
            $object->setRearSeatType($data->{'rear_seat_type'});
        }
        if (property_exists($data, 'rhd')) {
            $object->setRhd($data->{'rhd'});
        }
        if (property_exists($data, 'roof_color')) {
            $object->setRoofColor($data->{'roof_color'});
        }
        if (property_exists($data, 'seat_type')) {
            $object->setSeatType($data->{'seat_type'});
        }
        if (property_exists($data, 'spoiler_type')) {
            $object->setSpoilerType($data->{'spoiler_type'});
        }
        if (property_exists($data, 'sun_roof_installed')) {
            $object->setSunRoofInstalled($data->{'sun_roof_installed'});
        }
        if (property_exists($data, 'third_row_seats')) {
            $object->setThirdRowSeats($data->{'third_row_seats'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        if (property_exists($data, 'trim_badging')) {
            $object->setTrimBadging($data->{'trim_badging'});
        }
        if (property_exists($data, 'wheel_type')) {
            $object->setWheelType($data->{'wheel_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCanActuateTrunks()) {
            $data->{'can_actuate_trunks'} = $object->getCanActuateTrunks();
        }
        if (null !== $object->getCanAcceptNavigationRequests()) {
            $data->{'can_accept_navigation_requests'} = $object->getCanAcceptNavigationRequests();
        }
        $data->{'car_special_type'} = $object->getCarSpecialType();
        $data->{'car_type'} = $object->getCarType();
        $data->{'charge_port_type'} = $object->getChargePortType();
        if (null !== $object->getEuVehicle()) {
            $data->{'eu_vehicle'} = $object->getEuVehicle();
        }
        $data->{'exterior_color'} = $object->getExteriorColor();
        if (null !== $object->getHasLudicrousMode()) {
            $data->{'has_ludicrous_mode'} = $object->getHasLudicrousMode();
        }
        if (null !== $object->getMotorizedChargePort()) {
            $data->{'motorized_charge_port'} = $object->getMotorizedChargePort();
        }
        $data->{'perf_config'} = $object->getPerfConfig();
        if (null !== $object->getPlg()) {
            $data->{'plg'} = $object->getPlg();
        }
        $data->{'rear_seat_heaters'} = $object->getRearSeatHeaters();
        $data->{'rear_seat_type'} = $object->getRearSeatType();
        if (null !== $object->getRhd()) {
            $data->{'rhd'} = $object->getRhd();
        }
        $data->{'roof_color'} = $object->getRoofColor();
        $data->{'seat_type'} = $object->getSeatType();
        $data->{'spoiler_type'} = $object->getSpoilerType();
        $data->{'sun_roof_installed'} = $object->getSunRoofInstalled();
        $data->{'third_row_seats'} = $object->getThirdRowSeats();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        $data->{'trim_badging'} = $object->getTrimBadging();
        $data->{'wheel_type'} = $object->getWheelType();
        return $data;
    }
}