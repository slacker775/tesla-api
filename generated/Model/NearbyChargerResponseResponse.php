<?php

namespace Tesla\Api\Model;

class NearbyChargerResponseResponse
{
    /**
     * 
     *
     * @var float
     */
    protected $congestionSyncTimeUtcSecs;
    /**
     * 
     *
     * @var DestinationCharger[]
     */
    protected $destinationCharging;
    /**
     * 
     *
     * @var Supercharger[]
     */
    protected $superchargers;
    /**
     * 
     *
     * @return float
     */
    public function getCongestionSyncTimeUtcSecs() : float
    {
        return $this->congestionSyncTimeUtcSecs;
    }
    /**
     * 
     *
     * @param float $congestionSyncTimeUtcSecs
     *
     * @return self
     */
    public function setCongestionSyncTimeUtcSecs(float $congestionSyncTimeUtcSecs) : self
    {
        $this->congestionSyncTimeUtcSecs = $congestionSyncTimeUtcSecs;
        return $this;
    }
    /**
     * 
     *
     * @return DestinationCharger[]
     */
    public function getDestinationCharging() : array
    {
        return $this->destinationCharging;
    }
    /**
     * 
     *
     * @param DestinationCharger[] $destinationCharging
     *
     * @return self
     */
    public function setDestinationCharging(array $destinationCharging) : self
    {
        $this->destinationCharging = $destinationCharging;
        return $this;
    }
    /**
     * 
     *
     * @return Supercharger[]
     */
    public function getSuperchargers() : array
    {
        return $this->superchargers;
    }
    /**
     * 
     *
     * @param Supercharger[] $superchargers
     *
     * @return self
     */
    public function setSuperchargers(array $superchargers) : self
    {
        $this->superchargers = $superchargers;
        return $this;
    }
}