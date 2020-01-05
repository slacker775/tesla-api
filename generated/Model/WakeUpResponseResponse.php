<?php

namespace Tesla\Api\Model;

class WakeUpResponseResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var float
     */
    protected $userId;
    /**
     * 
     *
     * @var float
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
     * @var string
     */
    protected $displayName;
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
    protected $color;
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
     * @var bool
     */
    protected $inService;
    /**
     * 
     *
     * @var string
     */
    protected $idS;
    /**
     * 
     *
     * @var bool
     */
    protected $calendarEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $apiVersion;
    /**
     * 
     *
     * @var string
     */
    protected $backseatToken;
    /**
     * 
     *
     * @var float
     */
    protected $backseatTokenUpdatedAt;
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
     * @return float
     */
    public function getUserId() : float
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param float $userId
     *
     * @return self
     */
    public function setUserId(float $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVehicleId() : float
    {
        return $this->vehicleId;
    }
    /**
     * 
     *
     * @param float $vehicleId
     *
     * @return self
     */
    public function setVehicleId(float $vehicleId) : self
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
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;
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
    /**
     * 
     *
     * @return bool
     */
    public function getInService() : bool
    {
        return $this->inService;
    }
    /**
     * 
     *
     * @param bool $inService
     *
     * @return self
     */
    public function setInService(bool $inService) : self
    {
        $this->inService = $inService;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIdS() : string
    {
        return $this->idS;
    }
    /**
     * 
     *
     * @param string $idS
     *
     * @return self
     */
    public function setIdS(string $idS) : self
    {
        $this->idS = $idS;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCalendarEnabled() : bool
    {
        return $this->calendarEnabled;
    }
    /**
     * 
     *
     * @param bool $calendarEnabled
     *
     * @return self
     */
    public function setCalendarEnabled(bool $calendarEnabled) : self
    {
        $this->calendarEnabled = $calendarEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApiVersion() : string
    {
        return $this->apiVersion;
    }
    /**
     * 
     *
     * @param string $apiVersion
     *
     * @return self
     */
    public function setApiVersion(string $apiVersion) : self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBackseatToken() : string
    {
        return $this->backseatToken;
    }
    /**
     * 
     *
     * @param string $backseatToken
     *
     * @return self
     */
    public function setBackseatToken(string $backseatToken) : self
    {
        $this->backseatToken = $backseatToken;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBackseatTokenUpdatedAt() : float
    {
        return $this->backseatTokenUpdatedAt;
    }
    /**
     * 
     *
     * @param float $backseatTokenUpdatedAt
     *
     * @return self
     */
    public function setBackseatTokenUpdatedAt(float $backseatTokenUpdatedAt) : self
    {
        $this->backseatTokenUpdatedAt = $backseatTokenUpdatedAt;
        return $this;
    }
}