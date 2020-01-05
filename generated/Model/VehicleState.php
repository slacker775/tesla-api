<?php

namespace Tesla\Api\Model;

class VehicleState
{
    /**
     * 
     *
     * @var int
     */
    protected $apiVersion;
    /**
     * 
     *
     * @var string
     */
    protected $autoparkState;
    /**
     * 
     *
     * @var string
     */
    protected $autoparkStateV2;
    /**
     * 
     *
     * @var string
     */
    protected $autoparkStyle;
    /**
     * 
     *
     * @var bool
     */
    protected $calendarSupported;
    /**
     * 
     *
     * @var string
     */
    protected $carVersion;
    /**
     * 
     *
     * @var int
     */
    protected $centerDisplayState;
    /**
     * 
     *
     * @var int
     */
    protected $df;
    /**
     * 
     *
     * @var int
     */
    protected $dr;
    /**
     * 
     *
     * @var int
     */
    protected $ft;
    /**
     * 
     *
     * @var bool
     */
    protected $homelinkNearby;
    /**
     * 
     *
     * @var string
     */
    protected $lastAutoparkError;
    /**
     * 
     *
     * @var bool
     */
    protected $locked;
    /**
     * 
     *
     * @var VehicleStateMediaState
     */
    protected $mediaState;
    /**
     * 
     *
     * @var bool
     */
    protected $notificationsSupported;
    /**
     * 
     *
     * @var float
     */
    protected $odometer;
    /**
     * 
     *
     * @var bool
     */
    protected $parsedCalendarSupported;
    /**
     * 
     *
     * @var int
     */
    protected $pf;
    /**
     * 
     *
     * @var int
     */
    protected $pr;
    /**
     * 
     *
     * @var bool
     */
    protected $remoteStart;
    /**
     * 
     *
     * @var bool
     */
    protected $remoteStartSupported;
    /**
     * 
     *
     * @var int
     */
    protected $rt;
    /**
     * 
     *
     * @var bool
     */
    protected $sentryMode;
    /**
     * 
     *
     * @var VehicleStateSoftwareUpdate
     */
    protected $softwareUpdate;
    /**
     * 
     *
     * @var int
     */
    protected $sunRoofPercentOpen;
    /**
     * 
     *
     * @var string
     */
    protected $sunRoofState;
    /**
     * 
     *
     * @var float
     */
    protected $timestamp;
    /**
     * 
     *
     * @var bool
     */
    protected $valetMode;
    /**
     * 
     *
     * @var string
     */
    protected $vehicleName;
    /**
     * 
     *
     * @var VehicleStateSpeedLimitMode
     */
    protected $speedLimitMode;
    /**
     * 
     *
     * @var int
     */
    protected $fdWindow;
    /**
     * 
     *
     * @var int
     */
    protected $fpWindow;
    /**
     * 
     *
     * @var int
     */
    protected $homelinkDeviceCount;
    /**
     * 
     *
     * @var int
     */
    protected $rdWindow;
    /**
     * 
     *
     * @var int
     */
    protected $rpWindow;
    /**
     * 
     *
     * @var bool
     */
    protected $smartSummonAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $summonStandbyModeEnabled;
    /**
     * 
     *
     * @return int
     */
    public function getApiVersion() : int
    {
        return $this->apiVersion;
    }
    /**
     * 
     *
     * @param int $apiVersion
     *
     * @return self
     */
    public function setApiVersion(int $apiVersion) : self
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutoparkState() : string
    {
        return $this->autoparkState;
    }
    /**
     * 
     *
     * @param string $autoparkState
     *
     * @return self
     */
    public function setAutoparkState(string $autoparkState) : self
    {
        $this->autoparkState = $autoparkState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutoparkStateV2() : string
    {
        return $this->autoparkStateV2;
    }
    /**
     * 
     *
     * @param string $autoparkStateV2
     *
     * @return self
     */
    public function setAutoparkStateV2(string $autoparkStateV2) : self
    {
        $this->autoparkStateV2 = $autoparkStateV2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutoparkStyle() : string
    {
        return $this->autoparkStyle;
    }
    /**
     * 
     *
     * @param string $autoparkStyle
     *
     * @return self
     */
    public function setAutoparkStyle(string $autoparkStyle) : self
    {
        $this->autoparkStyle = $autoparkStyle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCalendarSupported() : bool
    {
        return $this->calendarSupported;
    }
    /**
     * 
     *
     * @param bool $calendarSupported
     *
     * @return self
     */
    public function setCalendarSupported(bool $calendarSupported) : self
    {
        $this->calendarSupported = $calendarSupported;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCarVersion() : string
    {
        return $this->carVersion;
    }
    /**
     * 
     *
     * @param string $carVersion
     *
     * @return self
     */
    public function setCarVersion(string $carVersion) : self
    {
        $this->carVersion = $carVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCenterDisplayState() : int
    {
        return $this->centerDisplayState;
    }
    /**
     * 
     *
     * @param int $centerDisplayState
     *
     * @return self
     */
    public function setCenterDisplayState(int $centerDisplayState) : self
    {
        $this->centerDisplayState = $centerDisplayState;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDf() : int
    {
        return $this->df;
    }
    /**
     * 
     *
     * @param int $df
     *
     * @return self
     */
    public function setDf(int $df) : self
    {
        $this->df = $df;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDr() : int
    {
        return $this->dr;
    }
    /**
     * 
     *
     * @param int $dr
     *
     * @return self
     */
    public function setDr(int $dr) : self
    {
        $this->dr = $dr;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFt() : int
    {
        return $this->ft;
    }
    /**
     * 
     *
     * @param int $ft
     *
     * @return self
     */
    public function setFt(int $ft) : self
    {
        $this->ft = $ft;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHomelinkNearby() : bool
    {
        return $this->homelinkNearby;
    }
    /**
     * 
     *
     * @param bool $homelinkNearby
     *
     * @return self
     */
    public function setHomelinkNearby(bool $homelinkNearby) : self
    {
        $this->homelinkNearby = $homelinkNearby;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastAutoparkError() : string
    {
        return $this->lastAutoparkError;
    }
    /**
     * 
     *
     * @param string $lastAutoparkError
     *
     * @return self
     */
    public function setLastAutoparkError(string $lastAutoparkError) : self
    {
        $this->lastAutoparkError = $lastAutoparkError;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * 
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked) : self
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * 
     *
     * @return VehicleStateMediaState
     */
    public function getMediaState() : VehicleStateMediaState
    {
        return $this->mediaState;
    }
    /**
     * 
     *
     * @param VehicleStateMediaState $mediaState
     *
     * @return self
     */
    public function setMediaState(VehicleStateMediaState $mediaState) : self
    {
        $this->mediaState = $mediaState;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNotificationsSupported() : bool
    {
        return $this->notificationsSupported;
    }
    /**
     * 
     *
     * @param bool $notificationsSupported
     *
     * @return self
     */
    public function setNotificationsSupported(bool $notificationsSupported) : self
    {
        $this->notificationsSupported = $notificationsSupported;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOdometer() : float
    {
        return $this->odometer;
    }
    /**
     * 
     *
     * @param float $odometer
     *
     * @return self
     */
    public function setOdometer(float $odometer) : self
    {
        $this->odometer = $odometer;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getParsedCalendarSupported() : bool
    {
        return $this->parsedCalendarSupported;
    }
    /**
     * 
     *
     * @param bool $parsedCalendarSupported
     *
     * @return self
     */
    public function setParsedCalendarSupported(bool $parsedCalendarSupported) : self
    {
        $this->parsedCalendarSupported = $parsedCalendarSupported;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPf() : int
    {
        return $this->pf;
    }
    /**
     * 
     *
     * @param int $pf
     *
     * @return self
     */
    public function setPf(int $pf) : self
    {
        $this->pf = $pf;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPr() : int
    {
        return $this->pr;
    }
    /**
     * 
     *
     * @param int $pr
     *
     * @return self
     */
    public function setPr(int $pr) : self
    {
        $this->pr = $pr;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRemoteStart() : bool
    {
        return $this->remoteStart;
    }
    /**
     * 
     *
     * @param bool $remoteStart
     *
     * @return self
     */
    public function setRemoteStart(bool $remoteStart) : self
    {
        $this->remoteStart = $remoteStart;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRemoteStartSupported() : bool
    {
        return $this->remoteStartSupported;
    }
    /**
     * 
     *
     * @param bool $remoteStartSupported
     *
     * @return self
     */
    public function setRemoteStartSupported(bool $remoteStartSupported) : self
    {
        $this->remoteStartSupported = $remoteStartSupported;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRt() : int
    {
        return $this->rt;
    }
    /**
     * 
     *
     * @param int $rt
     *
     * @return self
     */
    public function setRt(int $rt) : self
    {
        $this->rt = $rt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSentryMode() : bool
    {
        return $this->sentryMode;
    }
    /**
     * 
     *
     * @param bool $sentryMode
     *
     * @return self
     */
    public function setSentryMode(bool $sentryMode) : self
    {
        $this->sentryMode = $sentryMode;
        return $this;
    }
    /**
     * 
     *
     * @return VehicleStateSoftwareUpdate
     */
    public function getSoftwareUpdate() : VehicleStateSoftwareUpdate
    {
        return $this->softwareUpdate;
    }
    /**
     * 
     *
     * @param VehicleStateSoftwareUpdate $softwareUpdate
     *
     * @return self
     */
    public function setSoftwareUpdate(VehicleStateSoftwareUpdate $softwareUpdate) : self
    {
        $this->softwareUpdate = $softwareUpdate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSunRoofPercentOpen() : int
    {
        return $this->sunRoofPercentOpen;
    }
    /**
     * 
     *
     * @param int $sunRoofPercentOpen
     *
     * @return self
     */
    public function setSunRoofPercentOpen(int $sunRoofPercentOpen) : self
    {
        $this->sunRoofPercentOpen = $sunRoofPercentOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSunRoofState() : string
    {
        return $this->sunRoofState;
    }
    /**
     * 
     *
     * @param string $sunRoofState
     *
     * @return self
     */
    public function setSunRoofState(string $sunRoofState) : self
    {
        $this->sunRoofState = $sunRoofState;
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
     * @return bool
     */
    public function getValetMode() : bool
    {
        return $this->valetMode;
    }
    /**
     * 
     *
     * @param bool $valetMode
     *
     * @return self
     */
    public function setValetMode(bool $valetMode) : self
    {
        $this->valetMode = $valetMode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVehicleName() : string
    {
        return $this->vehicleName;
    }
    /**
     * 
     *
     * @param string $vehicleName
     *
     * @return self
     */
    public function setVehicleName(string $vehicleName) : self
    {
        $this->vehicleName = $vehicleName;
        return $this;
    }
    /**
     * 
     *
     * @return VehicleStateSpeedLimitMode
     */
    public function getSpeedLimitMode() : VehicleStateSpeedLimitMode
    {
        return $this->speedLimitMode;
    }
    /**
     * 
     *
     * @param VehicleStateSpeedLimitMode $speedLimitMode
     *
     * @return self
     */
    public function setSpeedLimitMode(VehicleStateSpeedLimitMode $speedLimitMode) : self
    {
        $this->speedLimitMode = $speedLimitMode;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFdWindow() : int
    {
        return $this->fdWindow;
    }
    /**
     * 
     *
     * @param int $fdWindow
     *
     * @return self
     */
    public function setFdWindow(int $fdWindow) : self
    {
        $this->fdWindow = $fdWindow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFpWindow() : int
    {
        return $this->fpWindow;
    }
    /**
     * 
     *
     * @param int $fpWindow
     *
     * @return self
     */
    public function setFpWindow(int $fpWindow) : self
    {
        $this->fpWindow = $fpWindow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomelinkDeviceCount() : int
    {
        return $this->homelinkDeviceCount;
    }
    /**
     * 
     *
     * @param int $homelinkDeviceCount
     *
     * @return self
     */
    public function setHomelinkDeviceCount(int $homelinkDeviceCount) : self
    {
        $this->homelinkDeviceCount = $homelinkDeviceCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRdWindow() : int
    {
        return $this->rdWindow;
    }
    /**
     * 
     *
     * @param int $rdWindow
     *
     * @return self
     */
    public function setRdWindow(int $rdWindow) : self
    {
        $this->rdWindow = $rdWindow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRpWindow() : int
    {
        return $this->rpWindow;
    }
    /**
     * 
     *
     * @param int $rpWindow
     *
     * @return self
     */
    public function setRpWindow(int $rpWindow) : self
    {
        $this->rpWindow = $rpWindow;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSmartSummonAvailable() : bool
    {
        return $this->smartSummonAvailable;
    }
    /**
     * 
     *
     * @param bool $smartSummonAvailable
     *
     * @return self
     */
    public function setSmartSummonAvailable(bool $smartSummonAvailable) : self
    {
        $this->smartSummonAvailable = $smartSummonAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSummonStandbyModeEnabled() : bool
    {
        return $this->summonStandbyModeEnabled;
    }
    /**
     * 
     *
     * @param bool $summonStandbyModeEnabled
     *
     * @return self
     */
    public function setSummonStandbyModeEnabled(bool $summonStandbyModeEnabled) : self
    {
        $this->summonStandbyModeEnabled = $summonStandbyModeEnabled;
        return $this;
    }
}