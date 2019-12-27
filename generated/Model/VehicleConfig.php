<?php

namespace Tesla\Api\Model;

class VehicleConfig
{
    /**
     * 
     *
     * @var bool
     */
    protected $canActuateTrunks;
    /**
     * 
     *
     * @var bool
     */
    protected $canAcceptNavigationRequests;
    /**
     * 
     *
     * @var string|null
     */
    protected $carSpecialType;
    /**
     * 
     *
     * @var string|null
     */
    protected $carType;
    /**
     * 
     *
     * @var string|null
     */
    protected $chargePortType;
    /**
     * 
     *
     * @var bool
     */
    protected $euVehicle;
    /**
     * 
     *
     * @var string|null
     */
    protected $exteriorColor;
    /**
     * 
     *
     * @var bool
     */
    protected $hasLudicrousMode;
    /**
     * 
     *
     * @var bool
     */
    protected $motorizedChargePort;
    /**
     * 
     *
     * @var string|null
     */
    protected $perfConfig;
    /**
     * 
     *
     * @var bool
     */
    protected $plg;
    /**
     * 
     *
     * @var float|null
     */
    protected $rearSeatHeaters;
    /**
     * 
     *
     * @var float|null
     */
    protected $rearSeatType;
    /**
     * 
     *
     * @var bool
     */
    protected $rhd;
    /**
     * 
     *
     * @var string|null
     */
    protected $roofColor;
    /**
     * 
     *
     * @var float|null
     */
    protected $seatType;
    /**
     * 
     *
     * @var string|null
     */
    protected $spoilerType;
    /**
     * 
     *
     * @var float|null
     */
    protected $sunRoofInstalled;
    /**
     * 
     *
     * @var string|null
     */
    protected $thirdRowSeats;
    /**
     * 
     *
     * @var float
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $trimBadging;
    /**
     * 
     *
     * @var string|null
     */
    protected $wheelType;
    /**
     * 
     *
     * @return bool
     */
    public function getCanActuateTrunks() : bool
    {
        return $this->canActuateTrunks;
    }
    /**
     * 
     *
     * @param bool $canActuateTrunks
     *
     * @return self
     */
    public function setCanActuateTrunks(bool $canActuateTrunks) : self
    {
        $this->canActuateTrunks = $canActuateTrunks;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanAcceptNavigationRequests() : bool
    {
        return $this->canAcceptNavigationRequests;
    }
    /**
     * 
     *
     * @param bool $canAcceptNavigationRequests
     *
     * @return self
     */
    public function setCanAcceptNavigationRequests(bool $canAcceptNavigationRequests) : self
    {
        $this->canAcceptNavigationRequests = $canAcceptNavigationRequests;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCarSpecialType() : ?string
    {
        return $this->carSpecialType;
    }
    /**
     * 
     *
     * @param string|null $carSpecialType
     *
     * @return self
     */
    public function setCarSpecialType(?string $carSpecialType) : self
    {
        $this->carSpecialType = $carSpecialType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCarType() : ?string
    {
        return $this->carType;
    }
    /**
     * 
     *
     * @param string|null $carType
     *
     * @return self
     */
    public function setCarType(?string $carType) : self
    {
        $this->carType = $carType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChargePortType() : ?string
    {
        return $this->chargePortType;
    }
    /**
     * 
     *
     * @param string|null $chargePortType
     *
     * @return self
     */
    public function setChargePortType(?string $chargePortType) : self
    {
        $this->chargePortType = $chargePortType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEuVehicle() : bool
    {
        return $this->euVehicle;
    }
    /**
     * 
     *
     * @param bool $euVehicle
     *
     * @return self
     */
    public function setEuVehicle(bool $euVehicle) : self
    {
        $this->euVehicle = $euVehicle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExteriorColor() : ?string
    {
        return $this->exteriorColor;
    }
    /**
     * 
     *
     * @param string|null $exteriorColor
     *
     * @return self
     */
    public function setExteriorColor(?string $exteriorColor) : self
    {
        $this->exteriorColor = $exteriorColor;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasLudicrousMode() : bool
    {
        return $this->hasLudicrousMode;
    }
    /**
     * 
     *
     * @param bool $hasLudicrousMode
     *
     * @return self
     */
    public function setHasLudicrousMode(bool $hasLudicrousMode) : self
    {
        $this->hasLudicrousMode = $hasLudicrousMode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMotorizedChargePort() : bool
    {
        return $this->motorizedChargePort;
    }
    /**
     * 
     *
     * @param bool $motorizedChargePort
     *
     * @return self
     */
    public function setMotorizedChargePort(bool $motorizedChargePort) : self
    {
        $this->motorizedChargePort = $motorizedChargePort;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPerfConfig() : ?string
    {
        return $this->perfConfig;
    }
    /**
     * 
     *
     * @param string|null $perfConfig
     *
     * @return self
     */
    public function setPerfConfig(?string $perfConfig) : self
    {
        $this->perfConfig = $perfConfig;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPlg() : bool
    {
        return $this->plg;
    }
    /**
     * 
     *
     * @param bool $plg
     *
     * @return self
     */
    public function setPlg(bool $plg) : self
    {
        $this->plg = $plg;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRearSeatHeaters() : ?float
    {
        return $this->rearSeatHeaters;
    }
    /**
     * 
     *
     * @param float|null $rearSeatHeaters
     *
     * @return self
     */
    public function setRearSeatHeaters(?float $rearSeatHeaters) : self
    {
        $this->rearSeatHeaters = $rearSeatHeaters;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRearSeatType() : ?float
    {
        return $this->rearSeatType;
    }
    /**
     * 
     *
     * @param float|null $rearSeatType
     *
     * @return self
     */
    public function setRearSeatType(?float $rearSeatType) : self
    {
        $this->rearSeatType = $rearSeatType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRhd() : bool
    {
        return $this->rhd;
    }
    /**
     * 
     *
     * @param bool $rhd
     *
     * @return self
     */
    public function setRhd(bool $rhd) : self
    {
        $this->rhd = $rhd;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRoofColor() : ?string
    {
        return $this->roofColor;
    }
    /**
     * 
     *
     * @param string|null $roofColor
     *
     * @return self
     */
    public function setRoofColor(?string $roofColor) : self
    {
        $this->roofColor = $roofColor;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSeatType() : ?float
    {
        return $this->seatType;
    }
    /**
     * 
     *
     * @param float|null $seatType
     *
     * @return self
     */
    public function setSeatType(?float $seatType) : self
    {
        $this->seatType = $seatType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSpoilerType() : ?string
    {
        return $this->spoilerType;
    }
    /**
     * 
     *
     * @param string|null $spoilerType
     *
     * @return self
     */
    public function setSpoilerType(?string $spoilerType) : self
    {
        $this->spoilerType = $spoilerType;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSunRoofInstalled() : ?float
    {
        return $this->sunRoofInstalled;
    }
    /**
     * 
     *
     * @param float|null $sunRoofInstalled
     *
     * @return self
     */
    public function setSunRoofInstalled(?float $sunRoofInstalled) : self
    {
        $this->sunRoofInstalled = $sunRoofInstalled;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThirdRowSeats() : ?string
    {
        return $this->thirdRowSeats;
    }
    /**
     * 
     *
     * @param string|null $thirdRowSeats
     *
     * @return self
     */
    public function setThirdRowSeats(?string $thirdRowSeats) : self
    {
        $this->thirdRowSeats = $thirdRowSeats;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTrimBadging() : ?string
    {
        return $this->trimBadging;
    }
    /**
     * 
     *
     * @param string|null $trimBadging
     *
     * @return self
     */
    public function setTrimBadging(?string $trimBadging) : self
    {
        $this->trimBadging = $trimBadging;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWheelType() : ?string
    {
        return $this->wheelType;
    }
    /**
     * 
     *
     * @param string|null $wheelType
     *
     * @return self
     */
    public function setWheelType(?string $wheelType) : self
    {
        $this->wheelType = $wheelType;
        return $this;
    }
}