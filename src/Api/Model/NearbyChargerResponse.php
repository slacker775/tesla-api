<?php

namespace Tesla\Api\Model;

class NearbyChargerResponse
{
    /**
     * 
     *
     * @var NearbyChargerResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @return NearbyChargerResponseResponse
     */
    public function getResponse() : NearbyChargerResponseResponse
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param NearbyChargerResponseResponse $response
     *
     * @return self
     */
    public function setResponse(NearbyChargerResponseResponse $response) : self
    {
        $this->response = $response;
        return $this;
    }
}