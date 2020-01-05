<?php

namespace Tesla\Api\Model;

class ChargeState
{
    /**
     * 
     *
     * @var string|null
     */
    protected $chargingState;
    /**
     * 
     *
     * @var string|null
     */
    protected $fastChargerType;
    /**
     * 
     *
     * @var string|null
     */
    protected $fastChargerBrand;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeLimitSoc;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeLimitSocStd;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeLimitSocMin;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeLimitSocMax;
    /**
     * 
     *
     * @var bool
     */
    protected $chargeToMaxRange;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxRangeChargeCounter;
    /**
     * 
     *
     * @var bool
     */
    protected $fastChargerPresent;
    /**
     * 
     *
     * @var float|null
     */
    protected $batteryRange;
    /**
     * 
     *
     * @var float|null
     */
    protected $estBatteryRange;
    /**
     * 
     *
     * @var float|null
     */
    protected $idealBatteryRange;
    /**
     * 
     *
     * @var int|null
     */
    protected $batteryLevel;
    /**
     * 
     *
     * @var int|null
     */
    protected $usableBatteryLevel;
    /**
     * 
     *
     * @var float|null
     */
    protected $chargeEnergyAdded;
    /**
     * 
     *
     * @var float|null
     */
    protected $chargeMilesAddedRated;
    /**
     * 
     *
     * @var float|null
     */
    protected $chargeMilesAddedIdeal;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargerVoltage;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargerPilotCurrent;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargerActualCurrent;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargerPower;
    /**
     * 
     *
     * @var float|null
     */
    protected $timeToFullCharge;
    /**
     * 
     *
     * @var bool
     */
    protected $tripCharging;
    /**
     * 
     *
     * @var float|null
     */
    protected $chargeRate;
    /**
     * 
     *
     * @var bool
     */
    protected $chargePortDoorOpen;
    /**
     * 
     *
     * @var string|null
     */
    protected $connChargeCable;
    /**
     * 
     *
     * @var string|null
     */
    protected $scheduledChargingStartTime;
    /**
     * 
     *
     * @var bool
     */
    protected $scheduledChargingPending;
    /**
     * 
     *
     * @var bool|null
     */
    protected $userChargeEnableRequest;
    /**
     * 
     *
     * @var bool
     */
    protected $chargeEnableRequest;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargerPhases;
    /**
     * 
     *
     * @var string|null
     */
    protected $chargePortLatch;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeCurrentRequest;
    /**
     * 
     *
     * @var int|null
     */
    protected $chargeCurrentRequestMax;
    /**
     * 
     *
     * @var bool
     */
    protected $managedChargingActive;
    /**
     * 
     *
     * @var bool
     */
    protected $managedChargingUserCanceled;
    /**
     * 
     *
     * @var float|null
     */
    protected $managedChargingStartTime;
    /**
     * 
     *
     * @var bool
     */
    protected $batteryHeaterOn;
    /**
     * 
     *
     * @var bool|null
     */
    protected $notEnoughPowerToHeat;
    /**
     * 
     *
     * @var float
     */
    protected $timestamp;
    /**
     * 
     *
     * @return string|null
     */
    public function getChargingState() : ?string
    {
        return $this->chargingState;
    }
    /**
     * 
     *
     * @param string|null $chargingState
     *
     * @return self
     */
    public function setChargingState(?string $chargingState) : self
    {
        $this->chargingState = $chargingState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFastChargerType() : ?string
    {
        return $this->fastChargerType;
    }
    /**
     * 
     *
     * @param string|null $fastChargerType
     *
     * @return self
     */
    public function setFastChargerType(?string $fastChargerType) : self
    {
        $this->fastChargerType = $fastChargerType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFastChargerBrand() : ?string
    {
        return $this->fastChargerBrand;
    }
    /**
     * 
     *
     * @param string|null $fastChargerBrand
     *
     * @return self
     */
    public function setFastChargerBrand(?string $fastChargerBrand) : self
    {
        $this->fastChargerBrand = $fastChargerBrand;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeLimitSoc() : ?int
    {
        return $this->chargeLimitSoc;
    }
    /**
     * 
     *
     * @param int|null $chargeLimitSoc
     *
     * @return self
     */
    public function setChargeLimitSoc(?int $chargeLimitSoc) : self
    {
        $this->chargeLimitSoc = $chargeLimitSoc;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeLimitSocStd() : ?int
    {
        return $this->chargeLimitSocStd;
    }
    /**
     * 
     *
     * @param int|null $chargeLimitSocStd
     *
     * @return self
     */
    public function setChargeLimitSocStd(?int $chargeLimitSocStd) : self
    {
        $this->chargeLimitSocStd = $chargeLimitSocStd;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeLimitSocMin() : ?int
    {
        return $this->chargeLimitSocMin;
    }
    /**
     * 
     *
     * @param int|null $chargeLimitSocMin
     *
     * @return self
     */
    public function setChargeLimitSocMin(?int $chargeLimitSocMin) : self
    {
        $this->chargeLimitSocMin = $chargeLimitSocMin;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeLimitSocMax() : ?int
    {
        return $this->chargeLimitSocMax;
    }
    /**
     * 
     *
     * @param int|null $chargeLimitSocMax
     *
     * @return self
     */
    public function setChargeLimitSocMax(?int $chargeLimitSocMax) : self
    {
        $this->chargeLimitSocMax = $chargeLimitSocMax;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getChargeToMaxRange() : bool
    {
        return $this->chargeToMaxRange;
    }
    /**
     * 
     *
     * @param bool $chargeToMaxRange
     *
     * @return self
     */
    public function setChargeToMaxRange(bool $chargeToMaxRange) : self
    {
        $this->chargeToMaxRange = $chargeToMaxRange;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxRangeChargeCounter() : ?int
    {
        return $this->maxRangeChargeCounter;
    }
    /**
     * 
     *
     * @param int|null $maxRangeChargeCounter
     *
     * @return self
     */
    public function setMaxRangeChargeCounter(?int $maxRangeChargeCounter) : self
    {
        $this->maxRangeChargeCounter = $maxRangeChargeCounter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFastChargerPresent() : bool
    {
        return $this->fastChargerPresent;
    }
    /**
     * 
     *
     * @param bool $fastChargerPresent
     *
     * @return self
     */
    public function setFastChargerPresent(bool $fastChargerPresent) : self
    {
        $this->fastChargerPresent = $fastChargerPresent;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBatteryRange() : ?float
    {
        return $this->batteryRange;
    }
    /**
     * 
     *
     * @param float|null $batteryRange
     *
     * @return self
     */
    public function setBatteryRange(?float $batteryRange) : self
    {
        $this->batteryRange = $batteryRange;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEstBatteryRange() : ?float
    {
        return $this->estBatteryRange;
    }
    /**
     * 
     *
     * @param float|null $estBatteryRange
     *
     * @return self
     */
    public function setEstBatteryRange(?float $estBatteryRange) : self
    {
        $this->estBatteryRange = $estBatteryRange;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getIdealBatteryRange() : ?float
    {
        return $this->idealBatteryRange;
    }
    /**
     * 
     *
     * @param float|null $idealBatteryRange
     *
     * @return self
     */
    public function setIdealBatteryRange(?float $idealBatteryRange) : self
    {
        $this->idealBatteryRange = $idealBatteryRange;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBatteryLevel() : ?int
    {
        return $this->batteryLevel;
    }
    /**
     * 
     *
     * @param int|null $batteryLevel
     *
     * @return self
     */
    public function setBatteryLevel(?int $batteryLevel) : self
    {
        $this->batteryLevel = $batteryLevel;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsableBatteryLevel() : ?int
    {
        return $this->usableBatteryLevel;
    }
    /**
     * 
     *
     * @param int|null $usableBatteryLevel
     *
     * @return self
     */
    public function setUsableBatteryLevel(?int $usableBatteryLevel) : self
    {
        $this->usableBatteryLevel = $usableBatteryLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getChargeEnergyAdded() : ?float
    {
        return $this->chargeEnergyAdded;
    }
    /**
     * 
     *
     * @param float|null $chargeEnergyAdded
     *
     * @return self
     */
    public function setChargeEnergyAdded(?float $chargeEnergyAdded) : self
    {
        $this->chargeEnergyAdded = $chargeEnergyAdded;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getChargeMilesAddedRated() : ?float
    {
        return $this->chargeMilesAddedRated;
    }
    /**
     * 
     *
     * @param float|null $chargeMilesAddedRated
     *
     * @return self
     */
    public function setChargeMilesAddedRated(?float $chargeMilesAddedRated) : self
    {
        $this->chargeMilesAddedRated = $chargeMilesAddedRated;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getChargeMilesAddedIdeal() : ?float
    {
        return $this->chargeMilesAddedIdeal;
    }
    /**
     * 
     *
     * @param float|null $chargeMilesAddedIdeal
     *
     * @return self
     */
    public function setChargeMilesAddedIdeal(?float $chargeMilesAddedIdeal) : self
    {
        $this->chargeMilesAddedIdeal = $chargeMilesAddedIdeal;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargerVoltage() : ?int
    {
        return $this->chargerVoltage;
    }
    /**
     * 
     *
     * @param int|null $chargerVoltage
     *
     * @return self
     */
    public function setChargerVoltage(?int $chargerVoltage) : self
    {
        $this->chargerVoltage = $chargerVoltage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargerPilotCurrent() : ?int
    {
        return $this->chargerPilotCurrent;
    }
    /**
     * 
     *
     * @param int|null $chargerPilotCurrent
     *
     * @return self
     */
    public function setChargerPilotCurrent(?int $chargerPilotCurrent) : self
    {
        $this->chargerPilotCurrent = $chargerPilotCurrent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargerActualCurrent() : ?int
    {
        return $this->chargerActualCurrent;
    }
    /**
     * 
     *
     * @param int|null $chargerActualCurrent
     *
     * @return self
     */
    public function setChargerActualCurrent(?int $chargerActualCurrent) : self
    {
        $this->chargerActualCurrent = $chargerActualCurrent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargerPower() : ?int
    {
        return $this->chargerPower;
    }
    /**
     * 
     *
     * @param int|null $chargerPower
     *
     * @return self
     */
    public function setChargerPower(?int $chargerPower) : self
    {
        $this->chargerPower = $chargerPower;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTimeToFullCharge() : ?float
    {
        return $this->timeToFullCharge;
    }
    /**
     * 
     *
     * @param float|null $timeToFullCharge
     *
     * @return self
     */
    public function setTimeToFullCharge(?float $timeToFullCharge) : self
    {
        $this->timeToFullCharge = $timeToFullCharge;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTripCharging() : bool
    {
        return $this->tripCharging;
    }
    /**
     * 
     *
     * @param bool $tripCharging
     *
     * @return self
     */
    public function setTripCharging(bool $tripCharging) : self
    {
        $this->tripCharging = $tripCharging;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getChargeRate() : ?float
    {
        return $this->chargeRate;
    }
    /**
     * 
     *
     * @param float|null $chargeRate
     *
     * @return self
     */
    public function setChargeRate(?float $chargeRate) : self
    {
        $this->chargeRate = $chargeRate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getChargePortDoorOpen() : bool
    {
        return $this->chargePortDoorOpen;
    }
    /**
     * 
     *
     * @param bool $chargePortDoorOpen
     *
     * @return self
     */
    public function setChargePortDoorOpen(bool $chargePortDoorOpen) : self
    {
        $this->chargePortDoorOpen = $chargePortDoorOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConnChargeCable() : ?string
    {
        return $this->connChargeCable;
    }
    /**
     * 
     *
     * @param string|null $connChargeCable
     *
     * @return self
     */
    public function setConnChargeCable(?string $connChargeCable) : self
    {
        $this->connChargeCable = $connChargeCable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScheduledChargingStartTime() : ?string
    {
        return $this->scheduledChargingStartTime;
    }
    /**
     * 
     *
     * @param string|null $scheduledChargingStartTime
     *
     * @return self
     */
    public function setScheduledChargingStartTime(?string $scheduledChargingStartTime) : self
    {
        $this->scheduledChargingStartTime = $scheduledChargingStartTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getScheduledChargingPending() : bool
    {
        return $this->scheduledChargingPending;
    }
    /**
     * 
     *
     * @param bool $scheduledChargingPending
     *
     * @return self
     */
    public function setScheduledChargingPending(bool $scheduledChargingPending) : self
    {
        $this->scheduledChargingPending = $scheduledChargingPending;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUserChargeEnableRequest() : ?bool
    {
        return $this->userChargeEnableRequest;
    }
    /**
     * 
     *
     * @param bool|null $userChargeEnableRequest
     *
     * @return self
     */
    public function setUserChargeEnableRequest(?bool $userChargeEnableRequest) : self
    {
        $this->userChargeEnableRequest = $userChargeEnableRequest;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getChargeEnableRequest() : bool
    {
        return $this->chargeEnableRequest;
    }
    /**
     * 
     *
     * @param bool $chargeEnableRequest
     *
     * @return self
     */
    public function setChargeEnableRequest(bool $chargeEnableRequest) : self
    {
        $this->chargeEnableRequest = $chargeEnableRequest;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargerPhases() : ?int
    {
        return $this->chargerPhases;
    }
    /**
     * 
     *
     * @param int|null $chargerPhases
     *
     * @return self
     */
    public function setChargerPhases(?int $chargerPhases) : self
    {
        $this->chargerPhases = $chargerPhases;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChargePortLatch() : ?string
    {
        return $this->chargePortLatch;
    }
    /**
     * 
     *
     * @param string|null $chargePortLatch
     *
     * @return self
     */
    public function setChargePortLatch(?string $chargePortLatch) : self
    {
        $this->chargePortLatch = $chargePortLatch;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeCurrentRequest() : ?int
    {
        return $this->chargeCurrentRequest;
    }
    /**
     * 
     *
     * @param int|null $chargeCurrentRequest
     *
     * @return self
     */
    public function setChargeCurrentRequest(?int $chargeCurrentRequest) : self
    {
        $this->chargeCurrentRequest = $chargeCurrentRequest;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getChargeCurrentRequestMax() : ?int
    {
        return $this->chargeCurrentRequestMax;
    }
    /**
     * 
     *
     * @param int|null $chargeCurrentRequestMax
     *
     * @return self
     */
    public function setChargeCurrentRequestMax(?int $chargeCurrentRequestMax) : self
    {
        $this->chargeCurrentRequestMax = $chargeCurrentRequestMax;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManagedChargingActive() : bool
    {
        return $this->managedChargingActive;
    }
    /**
     * 
     *
     * @param bool $managedChargingActive
     *
     * @return self
     */
    public function setManagedChargingActive(bool $managedChargingActive) : self
    {
        $this->managedChargingActive = $managedChargingActive;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManagedChargingUserCanceled() : bool
    {
        return $this->managedChargingUserCanceled;
    }
    /**
     * 
     *
     * @param bool $managedChargingUserCanceled
     *
     * @return self
     */
    public function setManagedChargingUserCanceled(bool $managedChargingUserCanceled) : self
    {
        $this->managedChargingUserCanceled = $managedChargingUserCanceled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getManagedChargingStartTime() : ?float
    {
        return $this->managedChargingStartTime;
    }
    /**
     * 
     *
     * @param float|null $managedChargingStartTime
     *
     * @return self
     */
    public function setManagedChargingStartTime(?float $managedChargingStartTime) : self
    {
        $this->managedChargingStartTime = $managedChargingStartTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBatteryHeaterOn() : bool
    {
        return $this->batteryHeaterOn;
    }
    /**
     * 
     *
     * @param bool $batteryHeaterOn
     *
     * @return self
     */
    public function setBatteryHeaterOn(bool $batteryHeaterOn) : self
    {
        $this->batteryHeaterOn = $batteryHeaterOn;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNotEnoughPowerToHeat() : ?bool
    {
        return $this->notEnoughPowerToHeat;
    }
    /**
     * 
     *
     * @param bool|null $notEnoughPowerToHeat
     *
     * @return self
     */
    public function setNotEnoughPowerToHeat(?bool $notEnoughPowerToHeat) : self
    {
        $this->notEnoughPowerToHeat = $notEnoughPowerToHeat;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTimestamp() : float
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param float $timestamp
     *
     * @return self
     */
    public function setTimestamp(float $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}