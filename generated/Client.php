<?php

namespace Tesla\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
    * Performs the login. Takes in an plain text email and password, matching the owner's login information for [https://my.teslamotors.com/user/login](https://my.teslamotors.com/user/login).
    Returns a `access_token` which is passed along as a header with all future requests to authenticate the user.
    You must provide the `Authorization: Bearer {access_token}` header in all other requests.
    The current client ID and secret are [available here](http://pastebin.com/YiLPDggh)
    *
    * @param \Tesla\Api\Model\CreateAccessTokenRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Tesla\Api\Model\CreateAccessTokenResponse|\Psr\Http\Message\ResponseInterface
    */
    public function createOauthToken(\Tesla\Api\Model\CreateAccessTokenRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\CreateOauthToken($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\GetVehiclesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicles(), $fetch);
    }
    /**
     * Retrieve a specific vehicle
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\VehicleResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicle(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicle($vehicleId), $fetch);
    }
    /**
     * Determines if mobile access to the vehicle is enabled.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\MobileAccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleMobileEnabled(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleMobileEnabled($vehicleId), $fetch);
    }
    /**
     * Returns the state of charge in the battery.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\ChargeStateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleChargeState(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleChargeState($vehicleId), $fetch);
    }
    /**
     * Returns the current temperature and climate control state.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\ClimateSettingsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleClimateState(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleClimateState($vehicleId), $fetch);
    }
    /**
     * Returns the driving and position state of the vehicle.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\DriveStateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleDriveState(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleDriveState($vehicleId), $fetch);
    }
    /**
     * Returns various information about the GUI settings of the car, such as unit format and range display.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\GuistateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleGuiSettings(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleGuiSettings($vehicleId), $fetch);
    }
    /**
     * Returns the vehicle's physical state, such as which doors are open.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\VehicleStateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleState(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleState($vehicleId), $fetch);
    }
    /**
     * Returns the vehicle's configuration
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\VehicleConfigResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleConfig(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleConfig($vehicleId), $fetch);
    }
    /**
     * Returns all vehicle ∂ata, potentially cached
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Tesla\Api\Exception\GetVehicleDataRequestTimeoutException
     *
     * @return null|\Tesla\Api\Model\VehicleDataResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getVehicleData(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\GetVehicleData($vehicleId), $fetch);
    }
    /**
     * Wakes up the car from the sleep state. Necessary to get some data from the car.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\WakeUpResponse|\Psr\Http\Message\ResponseInterface
     */
    public function wakeUpVehicle(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\WakeUpVehicle($vehicleId), $fetch);
    }
    /**
     * Wakes up the car from the sleep state. Necessary to get some data from the car.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function wakeUpVehicleCommand(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\WakeUpVehicleCommand($vehicleId), $fetch);
    }
    /**
    * Sets valet mode on or off with a PIN to disable it from within the car. Reuses last PIN from previous valet session.
    Valet Mode limits the car's top speed to 70MPH and 80kW of acceleration power. It also disables Homelink, Bluetooth and
    Wifi settings, and the ability to disable mobile access to the car. It also hides your favorites, home, and work
    locations in navigation.
    *
    * @param string $vehicleId The id of the Vehicle.
    * @param \Tesla\Api\Model\SetValetRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
    */
    public function toggleValetMode(string $vehicleId, \Tesla\Api\Model\SetValetRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\ToggleValetMode($vehicleId, $requestBody), $fetch);
    }
    /**
     * Resets the PIN set for valet mode, if set.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function resetValetPin(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\ResetValetPin($vehicleId), $fetch);
    }
    /**
     * Opens the charge port. Does not close the charge port (for now...). This endpoint also unlocks the charge port if it's locked.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function toggleChargePort(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\ToggleChargePort($vehicleId), $fetch);
    }
    /**
     * Set the charge mode to standard (90% under the new percentage system introduced in 4.5).
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sendStandardChargeLimit(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SendStandardChargeLimit($vehicleId), $fetch);
    }
    /**
     * Set the charge mode to max range (100% under the new percentage system introduced in 4.5). Use sparingly!
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setMaxChargeLimit(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetMaxChargeLimit($vehicleId), $fetch);
    }
    /**
     * Set the charge limit to a custom percentage.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SetChargeLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setChargeLimit(string $vehicleId, \Tesla\Api\Model\SetChargeLimitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetChargeLimit($vehicleId, $requestBody), $fetch);
    }
    /**
     * Start charging. Must be plugged in, have power available, and not have reached your charge limit.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function startCharge(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\StartCharge($vehicleId), $fetch);
    }
    /**
     * Stop charging. Must already be charging.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function stopCharge(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\StopCharge($vehicleId), $fetch);
    }
    /**
     * Get a list of nearby charging sites
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\NearbyChargerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function nearbyChargers(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\NearbyChargers($vehicleId), $fetch);
    }
    /**
     * Flash the lights once.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function flashLights(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\FlashLights($vehicleId), $fetch);
    }
    /**
     * Honk the horn once.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function honkHorn(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\HonkHorn($vehicleId), $fetch);
    }
    /**
     * Unlock the car's doors.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function unlockDoors(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\UnlockDoors($vehicleId), $fetch);
    }
    /**
     * Lock the car's doors.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function lockDoors(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\LockDoors($vehicleId), $fetch);
    }
    /**
     * Set the temperature target for the HVAC system.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SetTempsRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setTemperatures(string $vehicleId, \Tesla\Api\Model\SetTempsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetTemperatures($vehicleId, $requestBody), $fetch);
    }
    /**
     * Start the climate control system. Will cool or heat automatically, depending on set temperature.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function startHVAC(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\StartHVAC($vehicleId), $fetch);
    }
    /**
     * Stop the climate control system.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function stopHVAC(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\StopHVAC($vehicleId), $fetch);
    }
    /**
     * Set the heating level of a seat heater
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\RemoteSeatHeaterRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function remoteSeatHeaterRequest(string $vehicleId, \Tesla\Api\Model\RemoteSeatHeaterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\RemoteSeatHeaterRequest($vehicleId, $requestBody), $fetch);
    }
    /**
     * Toggle the steering wheel heater
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\RemoteSteeringWheelHeaterRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function remoteSteeringWheelHeaterRequest(string $vehicleId, \Tesla\Api\Model\RemoteSteeringWheelHeaterRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\RemoteSteeringWheelHeaterRequest($vehicleId, $requestBody), $fetch);
    }
    /**
     * Controls the car's panoramic roof, if installed.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\MovePanoRoofRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function openSunroof(string $vehicleId, \Tesla\Api\Model\MovePanoRoofRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\OpenSunroof($vehicleId, $requestBody), $fetch);
    }
    /**
     * Start the car for keyless driving. Must start driving within 2 minutes of issuing this request.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\RemoteStartRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function remoteStart(string $vehicleId, \Tesla\Api\Model\RemoteStartRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\RemoteStart($vehicleId, $requestBody), $fetch);
    }
    /**
     * Open the trunk or frunk. Currently inoperable.
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\OpenTrunkRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function openTrunk(string $vehicleId, \Tesla\Api\Model\OpenTrunkRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\OpenTrunk($vehicleId, $requestBody), $fetch);
    }
    /**
     * Activates Speed Limit
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SpeedLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function activateSpeedLimit(string $vehicleId, \Tesla\Api\Model\SpeedLimitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\ActivateSpeedLimit($vehicleId, $requestBody), $fetch);
    }
    /**
     * Deactivates Speed Limit
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SpeedLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateSpeedLimit(string $vehicleId, \Tesla\Api\Model\SpeedLimitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\DeactivateSpeedLimit($vehicleId, $requestBody), $fetch);
    }
    /**
     * Sets Speed Limit
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SetSpeedLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setSpeedLimit(string $vehicleId, \Tesla\Api\Model\SetSpeedLimitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetSpeedLimit($vehicleId, $requestBody), $fetch);
    }
    /**
     * Clears Speed Limit Pin
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SpeedLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function clearSpeedLimitPin(string $vehicleId, \Tesla\Api\Model\SpeedLimitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\ClearSpeedLimitPin($vehicleId, $requestBody), $fetch);
    }
    /**
     * Sends Navigation Request to Vehicle
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\NavigationRequestRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function navigationRequest(string $vehicleId, \Tesla\Api\Model\NavigationRequestRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\NavigationRequest($vehicleId, $requestBody), $fetch);
    }
    /**
     * Sends Data to Vehicle (v10 only)
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\ShareRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharetoVehicle(string $vehicleId, \Tesla\Api\Model\ShareRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SharetoVehicle($vehicleId, $requestBody), $fetch);
    }
    /**
     * Pause/Play Media
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaTogglePlayback(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaTogglePlayback($vehicleId), $fetch);
    }
    /**
     * Next Track
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaNextTrack(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaNextTrack($vehicleId), $fetch);
    }
    /**
     * Previous Track
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaPrevTrack(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaPrevTrack($vehicleId), $fetch);
    }
    /**
     * Next Favorite
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaNextFavorite(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaNextFavorite($vehicleId), $fetch);
    }
    /**
     * Previous Favorite
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaPrevFavorite(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaPrevFavorite($vehicleId), $fetch);
    }
    /**
     * Volume Up
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaVolumeUp(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaVolumeUp($vehicleId), $fetch);
    }
    /**
     * Volume Down
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mediaVolumeDown(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\MediaVolumeDown($vehicleId), $fetch);
    }
    /**
     * Start Software Update
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function startSoftwareUpdate(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\StartSoftwareUpdate($vehicleId), $fetch);
    }
    /**
     * Cancel Software Update
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cancelSoftwareUpdate(string $vehicleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\CancelSoftwareUpdate($vehicleId), $fetch);
    }
    /**
     * Toggle Sentry Mode
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\SentryModeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setSentryMode(string $vehicleId, \Tesla\Api\Model\SentryModeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetSentryMode($vehicleId, $requestBody), $fetch);
    }
    /**
     * Set Max Defrost
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\MaxDefrostRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setMaxDefrost(string $vehicleId, \Tesla\Api\Model\MaxDefrostRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\SetMaxDefrost($vehicleId, $requestBody), $fetch);
    }
    /**
     * Window Control
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\WindowControlRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function windowControl(string $vehicleId, \Tesla\Api\Model\WindowControlRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\WindowControl($vehicleId, $requestBody), $fetch);
    }
    /**
     * Trigger Homelink
     *
     * @param string $vehicleId The id of the Vehicle.
     * @param \Tesla\Api\Model\TriggerHomelinkRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Tesla\Api\Model\CommandResponse|\Psr\Http\Message\ResponseInterface
     */
    public function triggerHomelink(string $vehicleId, \Tesla\Api\Model\TriggerHomelinkRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Tesla\Api\Endpoint\TriggerHomelink($vehicleId, $requestBody), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://owner-api.teslamotors.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Tesla\Api\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}