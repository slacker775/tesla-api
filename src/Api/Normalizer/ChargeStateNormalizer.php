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
class ChargeStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\ChargeState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\ChargeState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tesla\Api\Model\ChargeState();
        if (property_exists($data, 'charging_state')) {
            $object->setChargingState($data->{'charging_state'});
        }
        if (property_exists($data, 'fast_charger_type')) {
            $object->setFastChargerType($data->{'fast_charger_type'});
        }
        if (property_exists($data, 'fast_charger_brand')) {
            $object->setFastChargerBrand($data->{'fast_charger_brand'});
        }
        if (property_exists($data, 'charge_limit_soc')) {
            $object->setChargeLimitSoc($data->{'charge_limit_soc'});
        }
        if (property_exists($data, 'charge_limit_soc_std')) {
            $object->setChargeLimitSocStd($data->{'charge_limit_soc_std'});
        }
        if (property_exists($data, 'charge_limit_soc_min')) {
            $object->setChargeLimitSocMin($data->{'charge_limit_soc_min'});
        }
        if (property_exists($data, 'charge_limit_soc_max')) {
            $object->setChargeLimitSocMax($data->{'charge_limit_soc_max'});
        }
        if (property_exists($data, 'charge_to_max_range')) {
            $object->setChargeToMaxRange($data->{'charge_to_max_range'});
        }
        if (property_exists($data, 'max_range_charge_counter')) {
            $object->setMaxRangeChargeCounter($data->{'max_range_charge_counter'});
        }
        if (property_exists($data, 'fast_charger_present')) {
            $object->setFastChargerPresent($data->{'fast_charger_present'});
        }
        if (property_exists($data, 'battery_range')) {
            $object->setBatteryRange($data->{'battery_range'});
        }
        if (property_exists($data, 'est_battery_range')) {
            $object->setEstBatteryRange($data->{'est_battery_range'});
        }
        if (property_exists($data, 'ideal_battery_range')) {
            $object->setIdealBatteryRange($data->{'ideal_battery_range'});
        }
        if (property_exists($data, 'battery_level')) {
            $object->setBatteryLevel($data->{'battery_level'});
        }
        if (property_exists($data, 'usable_battery_level')) {
            $object->setUsableBatteryLevel($data->{'usable_battery_level'});
        }
        if (property_exists($data, 'charge_energy_added')) {
            $object->setChargeEnergyAdded($data->{'charge_energy_added'});
        }
        if (property_exists($data, 'charge_miles_added_rated')) {
            $object->setChargeMilesAddedRated($data->{'charge_miles_added_rated'});
        }
        if (property_exists($data, 'charge_miles_added_ideal')) {
            $object->setChargeMilesAddedIdeal($data->{'charge_miles_added_ideal'});
        }
        if (property_exists($data, 'charger_voltage')) {
            $object->setChargerVoltage($data->{'charger_voltage'});
        }
        if (property_exists($data, 'charger_pilot_current')) {
            $object->setChargerPilotCurrent($data->{'charger_pilot_current'});
        }
        if (property_exists($data, 'charger_actual_current')) {
            $object->setChargerActualCurrent($data->{'charger_actual_current'});
        }
        if (property_exists($data, 'charger_power')) {
            $object->setChargerPower($data->{'charger_power'});
        }
        if (property_exists($data, 'time_to_full_charge')) {
            $object->setTimeToFullCharge($data->{'time_to_full_charge'});
        }
        if (property_exists($data, 'trip_charging')) {
            $object->setTripCharging($data->{'trip_charging'});
        }
        if (property_exists($data, 'charge_rate')) {
            $object->setChargeRate($data->{'charge_rate'});
        }
        if (property_exists($data, 'charge_port_door_open')) {
            $object->setChargePortDoorOpen($data->{'charge_port_door_open'});
        }
        if (property_exists($data, 'conn_charge_cable')) {
            $object->setConnChargeCable($data->{'conn_charge_cable'});
        }
        if (property_exists($data, 'scheduled_charging_start_time')) {
            $object->setScheduledChargingStartTime($data->{'scheduled_charging_start_time'});
        }
        if (property_exists($data, 'scheduled_charging_pending')) {
            $object->setScheduledChargingPending($data->{'scheduled_charging_pending'});
        }
        if (property_exists($data, 'user_charge_enable_request')) {
            $object->setUserChargeEnableRequest($data->{'user_charge_enable_request'});
        }
        if (property_exists($data, 'charge_enable_request')) {
            $object->setChargeEnableRequest($data->{'charge_enable_request'});
        }
        if (property_exists($data, 'charger_phases')) {
            $object->setChargerPhases($data->{'charger_phases'});
        }
        if (property_exists($data, 'charge_port_latch')) {
            $object->setChargePortLatch($data->{'charge_port_latch'});
        }
        if (property_exists($data, 'charge_current_request')) {
            $object->setChargeCurrentRequest($data->{'charge_current_request'});
        }
        if (property_exists($data, 'charge_current_request_max')) {
            $object->setChargeCurrentRequestMax($data->{'charge_current_request_max'});
        }
        if (property_exists($data, 'managed_charging_active')) {
            $object->setManagedChargingActive($data->{'managed_charging_active'});
        }
        if (property_exists($data, 'managed_charging_user_canceled')) {
            $object->setManagedChargingUserCanceled($data->{'managed_charging_user_canceled'});
        }
        if (property_exists($data, 'managed_charging_start_time')) {
            $object->setManagedChargingStartTime($data->{'managed_charging_start_time'});
        }
        if (property_exists($data, 'battery_heater_on')) {
            $object->setBatteryHeaterOn($data->{'battery_heater_on'});
        }
        if (property_exists($data, 'not_enough_power_to_heat')) {
            $object->setNotEnoughPowerToHeat($data->{'not_enough_power_to_heat'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'charging_state'} = $object->getChargingState();
        $data->{'fast_charger_type'} = $object->getFastChargerType();
        $data->{'fast_charger_brand'} = $object->getFastChargerBrand();
        $data->{'charge_limit_soc'} = $object->getChargeLimitSoc();
        $data->{'charge_limit_soc_std'} = $object->getChargeLimitSocStd();
        $data->{'charge_limit_soc_min'} = $object->getChargeLimitSocMin();
        $data->{'charge_limit_soc_max'} = $object->getChargeLimitSocMax();
        if (null !== $object->getChargeToMaxRange()) {
            $data->{'charge_to_max_range'} = $object->getChargeToMaxRange();
        }
        $data->{'max_range_charge_counter'} = $object->getMaxRangeChargeCounter();
        if (null !== $object->getFastChargerPresent()) {
            $data->{'fast_charger_present'} = $object->getFastChargerPresent();
        }
        $data->{'battery_range'} = $object->getBatteryRange();
        $data->{'est_battery_range'} = $object->getEstBatteryRange();
        $data->{'ideal_battery_range'} = $object->getIdealBatteryRange();
        $data->{'battery_level'} = $object->getBatteryLevel();
        $data->{'usable_battery_level'} = $object->getUsableBatteryLevel();
        $data->{'charge_energy_added'} = $object->getChargeEnergyAdded();
        $data->{'charge_miles_added_rated'} = $object->getChargeMilesAddedRated();
        $data->{'charge_miles_added_ideal'} = $object->getChargeMilesAddedIdeal();
        $data->{'charger_voltage'} = $object->getChargerVoltage();
        $data->{'charger_pilot_current'} = $object->getChargerPilotCurrent();
        $data->{'charger_actual_current'} = $object->getChargerActualCurrent();
        $data->{'charger_power'} = $object->getChargerPower();
        $data->{'time_to_full_charge'} = $object->getTimeToFullCharge();
        if (null !== $object->getTripCharging()) {
            $data->{'trip_charging'} = $object->getTripCharging();
        }
        $data->{'charge_rate'} = $object->getChargeRate();
        if (null !== $object->getChargePortDoorOpen()) {
            $data->{'charge_port_door_open'} = $object->getChargePortDoorOpen();
        }
        $data->{'conn_charge_cable'} = $object->getConnChargeCable();
        $data->{'scheduled_charging_start_time'} = $object->getScheduledChargingStartTime();
        if (null !== $object->getScheduledChargingPending()) {
            $data->{'scheduled_charging_pending'} = $object->getScheduledChargingPending();
        }
        $data->{'user_charge_enable_request'} = $object->getUserChargeEnableRequest();
        if (null !== $object->getChargeEnableRequest()) {
            $data->{'charge_enable_request'} = $object->getChargeEnableRequest();
        }
        $data->{'charger_phases'} = $object->getChargerPhases();
        $data->{'charge_port_latch'} = $object->getChargePortLatch();
        $data->{'charge_current_request'} = $object->getChargeCurrentRequest();
        $data->{'charge_current_request_max'} = $object->getChargeCurrentRequestMax();
        if (null !== $object->getManagedChargingActive()) {
            $data->{'managed_charging_active'} = $object->getManagedChargingActive();
        }
        if (null !== $object->getManagedChargingUserCanceled()) {
            $data->{'managed_charging_user_canceled'} = $object->getManagedChargingUserCanceled();
        }
        $data->{'managed_charging_start_time'} = $object->getManagedChargingStartTime();
        if (null !== $object->getBatteryHeaterOn()) {
            $data->{'battery_heater_on'} = $object->getBatteryHeaterOn();
        }
        $data->{'not_enough_power_to_heat'} = $object->getNotEnoughPowerToHeat();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}