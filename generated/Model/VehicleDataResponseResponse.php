<?php

namespace Tesla\Api\Model;

class VehicleDataResponseResponse
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
     * @var float
     */
    protected $userId;
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
     * @var string|null
     */
    protected $backseatToken;
    /**
     * 
     *
     * @var float|null
     */
    protected $backseatTokenUpdatedAt;
    /**
     * 
     *
     * @var GuiState
     */
    protected $guiSettings;
    /**
     * 
     *
     * @var ClimateState
     */
    protected $climateState;
    /**
     * 
     *
     * @var DriveState
     */
    protected $driveState;
    /**
     * 
     *
     * @var VehicleState
     */
    protected $vehicleState;
    /**
     * 
     *
     * @var ChargeState
     */
    protected $chargeState;
    /**
     * 
     *
     * @var VehicleConfig
     */
    protected $vehicleConfig;
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
     * @return string|null
     */
    public function getBackseatToken() : ?string
    {
        return $this->backseatToken;
    }
    /**
     * 
     *
     * @param string|null $backseatToken
     *
     * @return self
     */
    public function setBackseatToken(?string $backseatToken) : self
    {
        $this->backseatToken = $backseatToken;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBackseatTokenUpdatedAt() : ?float
    {
        return $this->backseatTokenUpdatedAt;
    }
    /**
     * 
     *
     * @param float|null $backseatTokenUpdatedAt
     *
     * @return self
     */
    public function setBackseatTokenUpdatedAt(?float $backseatTokenUpdatedAt) : self
    {
        $this->backseatTokenUpdatedAt = $backseatTokenUpdatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return GuiState
     */
    public function getGuiSettings() : GuiState
    {
        return $this->guiSettings;
    }
    /**
     * 
     *
     * @param GuiState $guiSettings
     *
     * @return self
     */
    public function setGuiSettings(GuiState $guiSettings) : self
    {
        $this->guiSettings = $guiSettings;
        return $this;
    }
    /**
     * 
     *
     * @return ClimateState
     */
    public function getClimateState() : ClimateState
    {
        return $this->climateState;
    }
    /**
     * 
     *
     * @param ClimateState $climateState
     *
     * @return self
     */
    public function setClimateState(ClimateState $climateState) : self
    {
        $this->climateState = $climateState;
        return $this;
    }
    /**
     * 
     *
     * @return DriveState
     */
    public function getDriveState() : DriveState
    {
        return $this->driveState;
    }
    /**
     * 
     *
     * @param DriveState $driveState
     *
     * @return self
     */
    public function setDriveState(DriveState $driveState) : self
    {
        $this->driveState = $driveState;
        return $this;
    }
    /**
     * 
     *
     * @return VehicleState
     */
    public function getVehicleState() : VehicleState
    {
        return $this->vehicleState;
    }
    /**
     * 
     *
     * @param VehicleState $vehicleState
     *
     * @return self
     */
    public function setVehicleState(VehicleState $vehicleState) : self
    {
        $this->vehicleState = $vehicleState;
        return $this;
    }
    /**
     * 
     *
     * @return ChargeState
     */
    public function getChargeState() : ChargeState
    {
        return $this->chargeState;
    }
    /**
     * 
     *
     * @param ChargeState $chargeState
     *
     * @return self
     */
    public function setChargeState(ChargeState $chargeState) : self
    {
        $this->chargeState = $chargeState;
        return $this;
    }
    /**
     * 
     *
     * @return VehicleConfig
     */
    public function getVehicleConfig() : VehicleConfig
    {
        return $this->vehicleConfig;
    }
    /**
     * 
     *
     * @param VehicleConfig $vehicleConfig
     *
     * @return self
     */
    public function setVehicleConfig(VehicleConfig $vehicleConfig) : self
    {
        $this->vehicleConfig = $vehicleConfig;
        return $this;
    }
}