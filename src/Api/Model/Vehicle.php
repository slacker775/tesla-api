<?php

namespace Tesla\Api\Model;

class Vehicle
{
    /**
     * 
     *
     * @var string|null
     */
    protected $color;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $optionCodes;
    /**
     * 
     *
     * @var string
     */
    protected $vehicleId;
    /**
     * 
     *
     * @var string
     */
    protected $vin;
    /**
     * 
     *
     * @var string[]
     */
    protected $tokens;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOptionCodes() : string
    {
        return $this->optionCodes;
    }
    /**
     * 
     *
     * @param string $optionCodes
     *
     * @return self
     */
    public function setOptionCodes(string $optionCodes) : self
    {
        $this->optionCodes = $optionCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVehicleId() : string
    {
        return $this->vehicleId;
    }
    /**
     * 
     *
     * @param string $vehicleId
     *
     * @return self
     */
    public function setVehicleId(string $vehicleId) : self
    {
        $this->vehicleId = $vehicleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVin() : string
    {
        return $this->vin;
    }
    /**
     * 
     *
     * @param string $vin
     *
     * @return self
     */
    public function setVin(string $vin) : self
    {
        $this->vin = $vin;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTokens() : array
    {
        return $this->tokens;
    }
    /**
     * 
     *
     * @param string[] $tokens
     *
     * @return self
     */
    public function setTokens(array $tokens) : self
    {
        $this->tokens = $tokens;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
}