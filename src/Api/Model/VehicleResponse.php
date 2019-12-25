<?php

namespace Tesla\Api\Model;

class VehicleResponse
{
    /**
     * 
     *
     * @var Vehicle
     */
    protected $response;
    /**
     * 
     *
     * @return Vehicle
     */
    public function getResponse() : Vehicle
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param Vehicle $response
     *
     * @return self
     */
    public function setResponse(Vehicle $response) : self
    {
        $this->response = $response;
        return $this;
    }
}