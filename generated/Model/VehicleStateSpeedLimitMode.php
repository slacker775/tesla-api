<?php

namespace Tesla\Api\Model;

class VehicleStateSpeedLimitMode
{
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var float
     */
    protected $currentLimitMph;
    /**
     * 
     *
     * @var float
     */
    protected $maxLimitMph;
    /**
     * 
     *
     * @var float
     */
    protected $minLimitMph;
    /**
     * 
     *
     * @var bool
     */
    protected $pinCodeSet;
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCurrentLimitMph() : float
    {
        return $this->currentLimitMph;
    }
    /**
     * 
     *
     * @param float $currentLimitMph
     *
     * @return self
     */
    public function setCurrentLimitMph(float $currentLimitMph) : self
    {
        $this->currentLimitMph = $currentLimitMph;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaxLimitMph() : float
    {
        return $this->maxLimitMph;
    }
    /**
     * 
     *
     * @param float $maxLimitMph
     *
     * @return self
     */
    public function setMaxLimitMph(float $maxLimitMph) : self
    {
        $this->maxLimitMph = $maxLimitMph;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMinLimitMph() : float
    {
        return $this->minLimitMph;
    }
    /**
     * 
     *
     * @param float $minLimitMph
     *
     * @return self
     */
    public function setMinLimitMph(float $minLimitMph) : self
    {
        $this->minLimitMph = $minLimitMph;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPinCodeSet() : bool
    {
        return $this->pinCodeSet;
    }
    /**
     * 
     *
     * @param bool $pinCodeSet
     *
     * @return self
     */
    public function setPinCodeSet(bool $pinCodeSet) : self
    {
        $this->pinCodeSet = $pinCodeSet;
        return $this;
    }
}