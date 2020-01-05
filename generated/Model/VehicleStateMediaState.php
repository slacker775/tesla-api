<?php

namespace Tesla\Api\Model;

class VehicleStateMediaState
{
    /**
     * 
     *
     * @var bool
     */
    protected $remoteControlEnabled;
    /**
     * 
     *
     * @return bool
     */
    public function getRemoteControlEnabled() : bool
    {
        return $this->remoteControlEnabled;
    }
    /**
     * 
     *
     * @param bool $remoteControlEnabled
     *
     * @return self
     */
    public function setRemoteControlEnabled(bool $remoteControlEnabled) : self
    {
        $this->remoteControlEnabled = $remoteControlEnabled;
        return $this;
    }
}