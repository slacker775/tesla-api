<?php

namespace Tesla\Api\Model;

class VehicleConfigResponse
{
    /**
     * 
     *
     * @var VehicleConfig
     */
    protected $response;
    /**
     * 
     *
     * @return VehicleConfig
     */
    public function getResponse() : VehicleConfig
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param VehicleConfig $response
     *
     * @return self
     */
    public function setResponse(VehicleConfig $response) : self
    {
        $this->response = $response;
        return $this;
    }
}