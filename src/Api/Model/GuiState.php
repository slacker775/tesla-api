<?php

namespace Tesla\Api\Model;

class GuiState
{
    /**
     * 
     *
     * @var string
     */
    protected $guiDistanceUnits;
    /**
     * 
     *
     * @var string
     */
    protected $guiTemperatureUnits;
    /**
     * 
     *
     * @var string
     */
    protected $guiChargeRateUnits;
    /**
     * 
     *
     * @var bool
     */
    protected $gui24HourTime;
    /**
     * 
     *
     * @var string
     */
    protected $guiRangeDisplay;
    /**
     * 
     *
     * @var float
     */
    protected $timestamp;
    /**
     * 
     *
     * @return string
     */
    public function getGuiDistanceUnits() : string
    {
        return $this->guiDistanceUnits;
    }
    /**
     * 
     *
     * @param string $guiDistanceUnits
     *
     * @return self
     */
    public function setGuiDistanceUnits(string $guiDistanceUnits) : self
    {
        $this->guiDistanceUnits = $guiDistanceUnits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGuiTemperatureUnits() : string
    {
        return $this->guiTemperatureUnits;
    }
    /**
     * 
     *
     * @param string $guiTemperatureUnits
     *
     * @return self
     */
    public function setGuiTemperatureUnits(string $guiTemperatureUnits) : self
    {
        $this->guiTemperatureUnits = $guiTemperatureUnits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGuiChargeRateUnits() : string
    {
        return $this->guiChargeRateUnits;
    }
    /**
     * 
     *
     * @param string $guiChargeRateUnits
     *
     * @return self
     */
    public function setGuiChargeRateUnits(string $guiChargeRateUnits) : self
    {
        $this->guiChargeRateUnits = $guiChargeRateUnits;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGui24HourTime() : bool
    {
        return $this->gui24HourTime;
    }
    /**
     * 
     *
     * @param bool $gui24HourTime
     *
     * @return self
     */
    public function setGui24HourTime(bool $gui24HourTime) : self
    {
        $this->gui24HourTime = $gui24HourTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGuiRangeDisplay() : string
    {
        return $this->guiRangeDisplay;
    }
    /**
     * 
     *
     * @param string $guiRangeDisplay
     *
     * @return self
     */
    public function setGuiRangeDisplay(string $guiRangeDisplay) : self
    {
        $this->guiRangeDisplay = $guiRangeDisplay;
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