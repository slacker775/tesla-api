<?php

namespace Tesla\Api\Model;

class DriveStateResponse
{
    /**
     * 
     *
     * @var DriveState
     */
    protected $response;
    /**
     * 
     *
     * @return DriveState
     */
    public function getResponse() : DriveState
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param DriveState $response
     *
     * @return self
     */
    public function setResponse(DriveState $response) : self
    {
        $this->response = $response;
        return $this;
    }
}