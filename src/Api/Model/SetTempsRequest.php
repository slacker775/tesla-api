<?php

namespace Tesla\Api\Model;

class SetTempsRequest
{
    /**
     * The desired temperature on the driver's side in celcius.
     *
     * @var float
     */
    protected $driverTemp;
    /**
     * The desired temperature on the passenger's side in celcius.
     *
     * @var float
     */
    protected $passengerTemp;
    /**
     * The desired temperature on the driver's side in celcius.
     *
     * @return float
     */
    public function getDriverTemp() : float
    {
        return $this->driverTemp;
    }
    /**
     * The desired temperature on the driver's side in celcius.
     *
     * @param float $driverTemp
     *
     * @return self
     */
    public function setDriverTemp(float $driverTemp) : self
    {
        $this->driverTemp = $driverTemp;
        return $this;
    }
    /**
     * The desired temperature on the passenger's side in celcius.
     *
     * @return float
     */
    public function getPassengerTemp() : float
    {
        return $this->passengerTemp;
    }
    /**
     * The desired temperature on the passenger's side in celcius.
     *
     * @param float $passengerTemp
     *
     * @return self
     */
    public function setPassengerTemp(float $passengerTemp) : self
    {
        $this->passengerTemp = $passengerTemp;
        return $this;
    }
}