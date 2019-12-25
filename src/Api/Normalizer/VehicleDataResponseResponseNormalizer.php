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
class VehicleDataResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleDataResponseResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleDataResponseResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\VehicleDataResponseResponse();
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
        if (property_exists($data, 'user_id')) {
            $object->setUserId($data->{'user_id'});
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
        if (property_exists($data, 'in_service')) {
            $object->setInService($data->{'in_service'});
        }
        if (property_exists($data, 'id_s')) {
            $object->setIdS($data->{'id_s'});
        }
        if (property_exists($data, 'calendar_enabled')) {
            $object->setCalendarEnabled($data->{'calendar_enabled'});
        }
        if (property_exists($data, 'backseat_token')) {
            $object->setBackseatToken($data->{'backseat_token'});
        }
        if (property_exists($data, 'backseat_token_updated_at')) {
            $object->setBackseatTokenUpdatedAt($data->{'backseat_token_updated_at'});
        }
        if (property_exists($data, 'gui_settings')) {
            $object->setGuiSettings($this->denormalizer->denormalize($data->{'gui_settings'}, 'Tesla\\Api\\Model\\GuiState', 'json', $context));
        }
        if (property_exists($data, 'climate_state')) {
            $object->setClimateState($this->denormalizer->denormalize($data->{'climate_state'}, 'Tesla\\Api\\Model\\ClimateState', 'json', $context));
        }
        if (property_exists($data, 'drive_state')) {
            $object->setDriveState($this->denormalizer->denormalize($data->{'drive_state'}, 'Tesla\\Api\\Model\\DriveState', 'json', $context));
        }
        if (property_exists($data, 'vehicle_state')) {
            $object->setVehicleState($this->denormalizer->denormalize($data->{'vehicle_state'}, 'Tesla\\Api\\Model\\VehicleState', 'json', $context));
        }
        if (property_exists($data, 'charge_state')) {
            $object->setChargeState($this->denormalizer->denormalize($data->{'charge_state'}, 'Tesla\\Api\\Model\\ChargeState', 'json', $context));
        }
        if (property_exists($data, 'vehicle_config')) {
            $object->setVehicleConfig($this->denormalizer->denormalize($data->{'vehicle_config'}, 'Tesla\\Api\\Model\\VehicleConfig', 'json', $context));
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
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
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
        if (null !== $object->getInService()) {
            $data->{'in_service'} = $object->getInService();
        }
        if (null !== $object->getIdS()) {
            $data->{'id_s'} = $object->getIdS();
        }
        if (null !== $object->getCalendarEnabled()) {
            $data->{'calendar_enabled'} = $object->getCalendarEnabled();
        }
        $data->{'backseat_token'} = $object->getBackseatToken();
        $data->{'backseat_token_updated_at'} = $object->getBackseatTokenUpdatedAt();
        if (null !== $object->getGuiSettings()) {
            $data->{'gui_settings'} = $this->normalizer->normalize($object->getGuiSettings(), 'json', $context);
        }
        if (null !== $object->getClimateState()) {
            $data->{'climate_state'} = $this->normalizer->normalize($object->getClimateState(), 'json', $context);
        }
        if (null !== $object->getDriveState()) {
            $data->{'drive_state'} = $this->normalizer->normalize($object->getDriveState(), 'json', $context);
        }
        if (null !== $object->getVehicleState()) {
            $data->{'vehicle_state'} = $this->normalizer->normalize($object->getVehicleState(), 'json', $context);
        }
        if (null !== $object->getChargeState()) {
            $data->{'charge_state'} = $this->normalizer->normalize($object->getChargeState(), 'json', $context);
        }
        if (null !== $object->getVehicleConfig()) {
            $data->{'vehicle_config'} = $this->normalizer->normalize($object->getVehicleConfig(), 'json', $context);
        }
        return $data;
    }
}