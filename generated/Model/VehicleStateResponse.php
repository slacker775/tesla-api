<?php

namespace Tesla\Api\Model;

class VehicleStateResponse
{
    /**
     * 
     *
     * @var VehicleState
     */
    protected $response;
    /**
     * 
     *
     * @return VehicleState
     */
    public function getResponse() : VehicleState
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param VehicleState $response
     *
     * @return self
     */
    public function setResponse(VehicleState $response) : self
    {
        $this->response = $response;
        return $this;
    }
}