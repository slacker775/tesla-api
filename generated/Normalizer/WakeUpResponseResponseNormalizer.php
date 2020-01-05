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
class WakeUpResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\WakeUpResponseResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\WakeUpResponseResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\WakeUpResponseResponse();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'user_id')) {
            $object->setUserId($data->{'user_id'});
        }
        if (property_exists($data, 'vehicle_id')) {
            $object->setVehicleId($data->{'vehicle_id'});
        }
        if (property_exists($data, 'vin')) {
            $object->setVin($data->{'vin'});
        }
        if (property_exists($data, 'display_name')) {
            $object->setDisplayName($data->{'display_name'});
        }
        if (property_exists($data, 'option_codes')) {
            $object->setOptionCodes($data->{'option_codes'});
        }
        if (property_exists($data, 'color')) {
            $object->setColor($data->{'color'});
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
        if (property_exists($data, 'api_version')) {
            $object->setApiVersion($data->{'api_version'});
        }
        if (property_exists($data, 'backseat_token')) {
            $object->setBackseatToken($data->{'backseat_token'});
        }
        if (property_exists($data, 'backseat_token_updated_at')) {
            $object->setBackseatTokenUpdatedAt($data->{'backseat_token_updated_at'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        }
        if (null !== $object->getVehicleId()) {
            $data->{'vehicle_id'} = $object->getVehicleId();
        }
        if (null !== $object->getVin()) {
            $data->{'vin'} = $object->getVin();
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        }
        if (null !== $object->getOptionCodes()) {
            $data->{'option_codes'} = $object->getOptionCodes();
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
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
        if (null !== $object->getApiVersion()) {
            $data->{'api_version'} = $object->getApiVersion();
        }
        if (null !== $object->getBackseatToken()) {
            $data->{'backseat_token'} = $object->getBackseatToken();
        }
        if (null !== $object->getBackseatTokenUpdatedAt()) {
            $data->{'backseat_token_updated_at'} = $object->getBackseatTokenUpdatedAt();
        }
        return $data;
    }
}