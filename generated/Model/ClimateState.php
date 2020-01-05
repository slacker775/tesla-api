<?php

namespace Tesla\Api\Model;

class ClimateState
{
    /**
     * 
     *
     * @var float|null
     */
    protected $insideTemp;
    /**
     * 
     *
     * @var float|null
     */
    protected $outsideTemp;
    /**
     * 
     *
     * @var float|null
     */
    protected $driverTempSetting;
    /**
     * 
     *
     * @var float|null
     */
    protected $passengerTempSetting;
    /**
     * 
     *
     * @var int|null
     */
    protected $leftTempDirection;
    /**
     * 
     *
     * @var int|null
     */
    protected $rightTempDirection;
    /**
     * 
     *
     * @var bool
     */
    protected $isFrontDefrosterOn;
    /**
     * 
     *
     * @var bool
     */
    protected $isRearDefrosterOn;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanStatus;
    /**
     * 
     *
     * @var bool
     */
    protected $isClimateOn;
    /**
     * 
     *
     * @var int|null
     */
    protected $minAvailTemp;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxAvailTemp;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterLeft;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRight;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRearLeft;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRearRight;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRearCenter;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRearRightBack;
    /**
     * 
     *
     * @var string|null
     */
    protected $seatHeaterRearLeftBack;
    /**
     * 
     *
     * @var bool
     */
    protected $batteryHeater;
    /**
     * 
     *
     * @var bool|null
     */
    protected $batteryHeaterNoPower;
    /**
     * 
     *
     * @var bool
     */
    protected $steeringWheelHeater;
    /**
     * 
     *
     * @var bool
     */
    protected $wiperBladeHeater;
    /**
     * 
     *
     * @var bool
     */
    protected $sideMirrorHeaters;
    /**
     * 
     *
     * @var bool
     */
    protected $isPreconditioning;
    /**
     * 
     *
     * @var bool
     */
    protected $smartPreconditioning;
    /**
     * 
     *
     * @var bool
     */
    protected $isAutoConditioningOn;
    /**
     * 
     *
     * @var int|null
     */
    protected $defrostMode;
    /**
     * 
     *
     * @var float
     */
    protected $timestamp;
    /**
     * 
     *
     * @return float|null
     */
    public function getInsideTemp() : ?float
    {
        return $this->insideTemp;
    }
    /**
     * 
     *
     * @param float|null $insideTemp
     *
     * @return self
     */
    public function setInsideTemp(?float $insideTemp) : self
    {
        $this->insideTemp = $insideTemp;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOutsideTemp() : ?float
    {
        return $this->outsideTemp;
    }
    /**
     * 
     *
     * @param float|null $outsideTemp
     *
     * @return self
     */
    public function setOutsideTemp(?float $outsideTemp) : self
    {
        $this->outsideTemp = $outsideTemp;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDriverTempSetting() : ?float
    {
        return $this->driverTempSetting;
    }
    /**
     * 
     *
     * @param float|null $driverTempSetting
     *
     * @return self
     */
    public function setDriverTempSetting(?float $driverTempSetting) : self
    {
        $this->driverTempSetting = $driverTempSetting;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPassengerTempSetting() : ?float
    {
        return $this->passengerTempSetting;
    }
    /**
     * 
     *
     * @param float|null $passengerTempSetting
     *
     * @return self
     */
    public function setPassengerTempSetting(?float $passengerTempSetting) : self
    {
        $this->passengerTempSetting = $passengerTempSetting;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLeftTempDirection() : ?int
    {
        return $this->leftTempDirection;
    }
    /**
     * 
     *
     * @param int|null $leftTempDirection
     *
     * @return self
     */
    public function setLeftTempDirection(?int $leftTempDirection) : self
    {
        $this->leftTempDirection = $leftTempDirection;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRightTempDirection() : ?int
    {
        return $this->rightTempDirection;
    }
    /**
     * 
     *
     * @param int|null $rightTempDirection
     *
     * @return self
     */
    public function setRightTempDirection(?int $rightTempDirection) : self
    {
        $this->rightTempDirection = $rightTempDirection;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsFrontDefrosterOn() : bool
    {
        return $this->isFrontDefrosterOn;
    }
    /**
     * 
     *
     * @param bool $isFrontDefrosterOn
     *
     * @return self
     */
    public function setIsFrontDefrosterOn(bool $isFrontDefrosterOn) : self
    {
        $this->isFrontDefrosterOn = $isFrontDefrosterOn;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsRearDefrosterOn() : bool
    {
        return $this->isRearDefrosterOn;
    }
    /**
     * 
     *
     * @param bool $isRearDefrosterOn
     *
     * @return self
     */
    public function setIsRearDefrosterOn(bool $isRearDefrosterOn) : self
    {
        $this->isRearDefrosterOn = $isRearDefrosterOn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanStatus() : ?int
    {
        return $this->fanStatus;
    }
    /**
     * 
     *
     * @param int|null $fanStatus
     *
     * @return self
     */
    public function setFanStatus(?int $fanStatus) : self
    {
        $this->fanStatus = $fanStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsClimateOn() : bool
    {
        return $this->isClimateOn;
    }
    /**
     * 
     *
     * @param bool $isClimateOn
     *
     * @return self
     */
    public function setIsClimateOn(bool $isClimateOn) : self
    {
        $this->isClimateOn = $isClimateOn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinAvailTemp() : ?int
    {
        return $this->minAvailTemp;
    }
    /**
     * 
     *
     * @param int|null $minAvailTemp
     *
     * @return self
     */
    public function setMinAvailTemp(?int $minAvailTemp) : self
    {
        $this->minAvailTemp = $minAvailTemp;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxAvailTemp() : ?int
    {
        return $this->maxAvailTemp;
    }
    /**
     * 
     *
     * @param int|null $maxAvailTemp
     *
     * @return self
     */
    public function setMaxAvailTemp(?int $maxAvailTemp) : self
    {
        $this->maxAvailTemp = $maxAvailTemp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterLeft() : ?string
    {
        return $this->seatHeaterLeft;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterLeft
     *
     * @return self
     */
    public function setSeatHeaterLeft(?string $seatHeaterLeft) : self
    {
        $this->seatHeaterLeft = $seatHeaterLeft;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRight() : ?string
    {
        return $this->seatHeaterRight;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRight
     *
     * @return self
     */
    public function setSeatHeaterRight(?string $seatHeaterRight) : self
    {
        $this->seatHeaterRight = $seatHeaterRight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRearLeft() : ?string
    {
        return $this->seatHeaterRearLeft;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRearLeft
     *
     * @return self
     */
    public function setSeatHeaterRearLeft(?string $seatHeaterRearLeft) : self
    {
        $this->seatHeaterRearLeft = $seatHeaterRearLeft;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRearRight() : ?string
    {
        return $this->seatHeaterRearRight;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRearRight
     *
     * @return self
     */
    public function setSeatHeaterRearRight(?string $seatHeaterRearRight) : self
    {
        $this->seatHeaterRearRight = $seatHeaterRearRight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRearCenter() : ?string
    {
        return $this->seatHeaterRearCenter;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRearCenter
     *
     * @return self
     */
    public function setSeatHeaterRearCenter(?string $seatHeaterRearCenter) : self
    {
        $this->seatHeaterRearCenter = $seatHeaterRearCenter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRearRightBack() : ?string
    {
        return $this->seatHeaterRearRightBack;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRearRightBack
     *
     * @return self
     */
    public function setSeatHeaterRearRightBack(?string $seatHeaterRearRightBack) : self
    {
        $this->seatHeaterRearRightBack = $seatHeaterRearRightBack;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeatHeaterRearLeftBack() : ?string
    {
        return $this->seatHeaterRearLeftBack;
    }
    /**
     * 
     *
     * @param string|null $seatHeaterRearLeftBack
     *
     * @return self
     */
    public function setSeatHeaterRearLeftBack(?string $seatHeaterRearLeftBack) : self
    {
        $this->seatHeaterRearLeftBack = $seatHeaterRearLeftBack;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBatteryHeater() : bool
    {
        return $this->batteryHeater;
    }
    /**
     * 
     *
     * @param bool $batteryHeater
     *
     * @return self
     */
    public function setBatteryHeater(bool $batteryHeater) : self
    {
        $this->batteryHeater = $batteryHeater;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBatteryHeaterNoPower() : ?bool
    {
        return $this->batteryHeaterNoPower;
    }
    /**
     * 
     *
     * @param bool|null $batteryHeaterNoPower
     *
     * @return self
     */
    public function setBatteryHeaterNoPower(?bool $batteryHeaterNoPower) : self
    {
        $this->batteryHeaterNoPower = $batteryHeaterNoPower;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSteeringWheelHeater() : bool
    {
        return $this->steeringWheelHeater;
    }
    /**
     * 
     *
     * @param bool $steeringWheelHeater
     *
     * @return self
     */
    public function setSteeringWheelHeater(bool $steeringWheelHeater) : self
    {
        $this->steeringWheelHeater = $steeringWheelHeater;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWiperBladeHeater() : bool
    {
        return $this->wiperBladeHeater;
    }
    /**
     * 
     *
     * @param bool $wiperBladeHeater
     *
     * @return self
     */
    public function setWiperBladeHeater(bool $wiperBladeHeater) : self
    {
        $this->wiperBladeHeater = $wiperBladeHeater;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSideMirrorHeaters() : bool
    {
        return $this->sideMirrorHeaters;
    }
    /**
     * 
     *
     * @param bool $sideMirrorHeaters
     *
     * @return self
     */
    public function setSideMirrorHeaters(bool $sideMirrorHeaters) : self
    {
        $this->sideMirrorHeaters = $sideMirrorHeaters;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPreconditioning() : bool
    {
        return $this->isPreconditioning;
    }
    /**
     * 
     *
     * @param bool $isPreconditioning
     *
     * @return self
     */
    public function setIsPreconditioning(bool $isPreconditioning) : self
    {
        $this->isPreconditioning = $isPreconditioning;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSmartPreconditioning() : bool
    {
        return $this->smartPreconditioning;
    }
    /**
     * 
     *
     * @param bool $smartPreconditioning
     *
     * @return self
     */
    public function setSmartPreconditioning(bool $smartPreconditioning) : self
    {
        $this->smartPreconditioning = $smartPreconditioning;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAutoConditioningOn() : bool
    {
        return $this->isAutoConditioningOn;
    }
    /**
     * 
     *
     * @param bool $isAutoConditioningOn
     *
     * @return self
     */
    public function setIsAutoConditioningOn(bool $isAutoConditioningOn) : self
    {
        $this->isAutoConditioningOn = $isAutoConditioningOn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefrostMode() : ?int
    {
        return $this->defrostMode;
    }
    /**
     * 
     *
     * @param int|null $defrostMode
     *
     * @return self
     */
    public function setDefrostMode(?int $defrostMode) : self
    {
        $this->defrostMode = $defrostMode;
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