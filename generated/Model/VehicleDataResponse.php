<?php

namespace Tesla\Api\Model;

class VehicleDataResponse
{
    /**
     * 
     *
     * @var VehicleDataResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @return VehicleDataResponseResponse
     */
    public function getResponse() : VehicleDataResponseResponse
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param VehicleDataResponseResponse $response
     *
     * @return self
     */
    public function setResponse(VehicleDataResponseResponse $response) : self
    {
        $this->response = $response;
        return $this;
    }
}