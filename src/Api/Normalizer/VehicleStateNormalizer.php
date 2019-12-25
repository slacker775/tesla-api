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
class VehicleStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\VehicleState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\VehicleState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\VehicleState();
        if (property_exists($data, 'api_version')) {
            $object->setApiVersion($data->{'api_version'});
        }
        if (property_exists($data, 'autopark_state')) {
            $object->setAutoparkState($data->{'autopark_state'});
        }
        if (property_exists($data, 'autopark_state_v2')) {
            $object->setAutoparkStateV2($data->{'autopark_state_v2'});
        }
        if (property_exists($data, 'autopark_style')) {
            $object->setAutoparkStyle($data->{'autopark_style'});
        }
        if (property_exists($data, 'calendar_supported')) {
            $object->setCalendarSupported($data->{'calendar_supported'});
        }
        if (property_exists($data, 'car_version')) {
            $object->setCarVersion($data->{'car_version'});
        }
        if (property_exists($data, 'center_display_state')) {
            $object->setCenterDisplayState($data->{'center_display_state'});
        }
        if (property_exists($data, 'df')) {
            $object->setDf($data->{'df'});
        }
        if (property_exists($data, 'dr')) {
            $object->setDr($data->{'dr'});
        }
        if (property_exists($data, 'ft')) {
            $object->setFt($data->{'ft'});
        }
        if (property_exists($data, 'homelink_nearby')) {
            $object->setHomelinkNearby($data->{'homelink_nearby'});
        }
        if (property_exists($data, 'last_autopark_error')) {
            $object->setLastAutoparkError($data->{'last_autopark_error'});
        }
        if (property_exists($data, 'locked')) {
            $object->setLocked($data->{'locked'});
        }
        if (property_exists($data, 'media_state')) {
            $object->setMediaState($this->denormalizer->denormalize($data->{'media_state'}, 'Tesla\\Api\\Model\\VehicleStateMediaState', 'json', $context));
        }
        if (property_exists($data, 'notifications_supported')) {
            $object->setNotificationsSupported($data->{'notifications_supported'});
        }
        if (property_exists($data, 'odometer')) {
            $object->setOdometer($data->{'odometer'});
        }
        if (property_exists($data, 'parsed_calendar_supported')) {
            $object->setParsedCalendarSupported($data->{'parsed_calendar_supported'});
        }
        if (property_exists($data, 'pf')) {
            $object->setPf($data->{'pf'});
        }
        if (property_exists($data, 'pr')) {
            $object->setPr($data->{'pr'});
        }
        if (property_exists($data, 'remote_start')) {
            $object->setRemoteStart($data->{'remote_start'});
        }
        if (property_exists($data, 'remote_start_supported')) {
            $object->setRemoteStartSupported($data->{'remote_start_supported'});
        }
        if (property_exists($data, 'rt')) {
            $object->setRt($data->{'rt'});
        }
        if (property_exists($data, 'sentry_mode')) {
            $object->setSentryMode($data->{'sentry_mode'});
        }
        if (property_exists($data, 'software_update')) {
            $object->setSoftwareUpdate($this->denormalizer->denormalize($data->{'software_update'}, 'Tesla\\Api\\Model\\VehicleStateSoftwareUpdate', 'json', $context));
        }
        if (property_exists($data, 'sun_roof_percent_open')) {
            $object->setSunRoofPercentOpen($data->{'sun_roof_percent_open'});
        }
        if (property_exists($data, 'sun_roof_state')) {
            $object->setSunRoofState($data->{'sun_roof_state'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        if (property_exists($data, 'valet_mode')) {
            $object->setValetMode($data->{'valet_mode'});
        }
        if (property_exists($data, 'vehicle_name')) {
            $object->setVehicleName($data->{'vehicle_name'});
        }
        if (property_exists($data, 'speed_limit_mode')) {
            $object->setSpeedLimitMode($this->denormalizer->denormalize($data->{'speed_limit_mode'}, 'Tesla\\Api\\Model\\VehicleStateSpeedLimitMode', 'json', $context));
        }
        if (property_exists($data, 'fd_window')) {
            $object->setFdWindow($data->{'fd_window'});
        }
        if (property_exists($data, 'fp_window')) {
            $object->setFpWindow($data->{'fp_window'});
        }
        if (property_exists($data, 'homelink_device_count')) {
            $object->setHomelinkDeviceCount($data->{'homelink_device_count'});
        }
        if (property_exists($data, 'rd_window')) {
            $object->setRdWindow($data->{'rd_window'});
        }
        if (property_exists($data, 'rp_window')) {
            $object->setRpWindow($data->{'rp_window'});
        }
        if (property_exists($data, 'smart_summon_available')) {
            $object->setSmartSummonAvailable($data->{'smart_summon_available'});
        }
        if (property_exists($data, 'summon_standby_mode_enabled')) {
            $object->setSummonStandbyModeEnabled($data->{'summon_standby_mode_enabled'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getApiVersion()) {
            $data->{'api_version'} = $object->getApiVersion();
        }
        if (null !== $object->getAutoparkState()) {
            $data->{'autopark_state'} = $object->getAutoparkState();
        }
        if (null !== $object->getAutoparkStateV2()) {
            $data->{'autopark_state_v2'} = $object->getAutoparkStateV2();
        }
        if (null !== $object->getAutoparkStyle()) {
            $data->{'autopark_style'} = $object->getAutoparkStyle();
        }
        if (null !== $object->getCalendarSupported()) {
            $data->{'calendar_supported'} = $object->getCalendarSupported();
        }
        if (null !== $object->getCarVersion()) {
            $data->{'car_version'} = $object->getCarVersion();
        }
        if (null !== $object->getCenterDisplayState()) {
            $data->{'center_display_state'} = $object->getCenterDisplayState();
        }
        if (null !== $object->getDf()) {
            $data->{'df'} = $object->getDf();
        }
        if (null !== $object->getDr()) {
            $data->{'dr'} = $object->getDr();
        }
        if (null !== $object->getFt()) {
            $data->{'ft'} = $object->getFt();
        }
        if (null !== $object->getHomelinkNearby()) {
            $data->{'homelink_nearby'} = $object->getHomelinkNearby();
        }
        if (null !== $object->getLastAutoparkError()) {
            $data->{'last_autopark_error'} = $object->getLastAutoparkError();
        }
        if (null !== $object->getLocked()) {
            $data->{'locked'} = $object->getLocked();
        }
        if (null !== $object->getMediaState()) {
            $data->{'media_state'} = $this->normalizer->normalize($object->getMediaState(), 'json', $context);
        }
        if (null !== $object->getNotificationsSupported()) {
            $data->{'notifications_supported'} = $object->getNotificationsSupported();
        }
        if (null !== $object->getOdometer()) {
            $data->{'odometer'} = $object->getOdometer();
        }
        if (null !== $object->getParsedCalendarSupported()) {
            $data->{'parsed_calendar_supported'} = $object->getParsedCalendarSupported();
        }
        if (null !== $object->getPf()) {
            $data->{'pf'} = $object->getPf();
        }
        if (null !== $object->getPr()) {
            $data->{'pr'} = $object->getPr();
        }
        if (null !== $object->getRemoteStart()) {
            $data->{'remote_start'} = $object->getRemoteStart();
        }
        if (null !== $object->getRemoteStartSupported()) {
            $data->{'remote_start_supported'} = $object->getRemoteStartSupported();
        }
        if (null !== $object->getRt()) {
            $data->{'rt'} = $object->getRt();
        }
        if (null !== $object->getSentryMode()) {
            $data->{'sentry_mode'} = $object->getSentryMode();
        }
        if (null !== $object->getSoftwareUpdate()) {
            $data->{'software_update'} = $this->normalizer->normalize($object->getSoftwareUpdate(), 'json', $context);
        }
        if (null !== $object->getSunRoofPercentOpen()) {
            $data->{'sun_roof_percent_open'} = $object->getSunRoofPercentOpen();
        }
        if (null !== $object->getSunRoofState()) {
            $data->{'sun_roof_state'} = $object->getSunRoofState();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        if (null !== $object->getValetMode()) {
            $data->{'valet_mode'} = $object->getValetMode();
        }
        if (null !== $object->getVehicleName()) {
            $data->{'vehicle_name'} = $object->getVehicleName();
        }
        if (null !== $object->getSpeedLimitMode()) {
            $data->{'speed_limit_mode'} = $this->normalizer->normalize($object->getSpeedLimitMode(), 'json', $context);
        }
        if (null !== $object->getFdWindow()) {
            $data->{'fd_window'} = $object->getFdWindow();
        }
        if (null !== $object->getFpWindow()) {
            $data->{'fp_window'} = $object->getFpWindow();
        }
        if (null !== $object->getHomelinkDeviceCount()) {
            $data->{'homelink_device_count'} = $object->getHomelinkDeviceCount();
        }
        if (null !== $object->getRdWindow()) {
            $data->{'rd_window'} = $object->getRdWindow();
        }
        if (null !== $object->getRpWindow()) {
            $data->{'rp_window'} = $object->getRpWindow();
        }
        if (null !== $object->getSmartSummonAvailable()) {
            $data->{'smart_summon_available'} = $object->getSmartSummonAvailable();
        }
        if (null !== $object->getSummonStandbyModeEnabled()) {
            $data->{'summon_standby_mode_enabled'} = $object->getSummonStandbyModeEnabled();
        }
        return $data;
    }
}