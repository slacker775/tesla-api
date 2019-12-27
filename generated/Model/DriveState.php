<?php

namespace Tesla\Api\Model;

class DriveState
{
    /**
     * 
     *
     * @var string|null
     */
    protected $shiftState;
    /**
     * 
     *
     * @var float|null
     */
    protected $speed;
    /**
     * 
     *
     * @var float|null
     */
    protected $power;
    /**
     * 
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * 
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * 
     *
     * @var int|null
     */
    protected $heading;
    /**
     * 
     *
     * @var float|null
     */
    protected $gpsAsOf;
    /**
     * 
     *
     * @var int|null
     */
    protected $nativeLocationSupported;
    /**
     * 
     *
     * @var float|null
     */
    protected $nativeLatitude;
    /**
     * 
     *
     * @var float|null
     */
    protected $nativeLongitude;
    /**
     * 
     *
     * @var string|null
     */
    protected $nativeType;
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
    public function getShiftState() : ?string
    {
        return $this->shiftState;
    }
    /**
     * 
     *
     * @param string|null $shiftState
     *
     * @return self
     */
    public function setShiftState(?string $shiftState) : self
    {
        $this->shiftState = $shiftState;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSpeed() : ?float
    {
        return $this->speed;
    }
    /**
     * 
     *
     * @param float|null $speed
     *
     * @return self
     */
    public function setSpeed(?float $speed) : self
    {
        $this->speed = $speed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPower() : ?float
    {
        return $this->power;
    }
    /**
     * 
     *
     * @param float|null $power
     *
     * @return self
     */
    public function setPower(?float $power) : self
    {
        $this->power = $power;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * 
     *
     * @param float|null $latitude
     *
     * @return self
     */
    public function setLatitude(?float $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * 
     *
     * @param float|null $longitude
     *
     * @return self
     */
    public function setLongitude(?float $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeading() : ?int
    {
        return $this->heading;
    }
    /**
     * 
     *
     * @param int|null $heading
     *
     * @return self
     */
    public function setHeading(?int $heading) : self
    {
        $this->heading = $heading;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGpsAsOf() : ?float
    {
        return $this->gpsAsOf;
    }
    /**
     * 
     *
     * @param float|null $gpsAsOf
     *
     * @return self
     */
    public function setGpsAsOf(?float $gpsAsOf) : self
    {
        $this->gpsAsOf = $gpsAsOf;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNativeLocationSupported() : ?int
    {
        return $this->nativeLocationSupported;
    }
    /**
     * 
     *
     * @param int|null $nativeLocationSupported
     *
     * @return self
     */
    public function setNativeLocationSupported(?int $nativeLocationSupported) : self
    {
        $this->nativeLocationSupported = $nativeLocationSupported;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNativeLatitude() : ?float
    {
        return $this->nativeLatitude;
    }
    /**
     * 
     *
     * @param float|null $nativeLatitude
     *
     * @return self
     */
    public function setNativeLatitude(?float $nativeLatitude) : self
    {
        $this->nativeLatitude = $nativeLatitude;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNativeLongitude() : ?float
    {
        return $this->nativeLongitude;
    }
    /**
     * 
     *
     * @param float|null $nativeLongitude
     *
     * @return self
     */
    public function setNativeLongitude(?float $nativeLongitude) : self
    {
        $this->nativeLongitude = $nativeLongitude;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNativeType() : ?string
    {
        return $this->nativeType;
    }
    /**
     * 
     *
     * @param string|null $nativeType
     *
     * @return self
     */
    public function setNativeType(?string $nativeType) : self
    {
        $this->nativeType = $nativeType;
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