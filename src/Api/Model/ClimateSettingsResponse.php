<?php

namespace Tesla\Api\Model;

class ClimateSettingsResponse
{
    /**
     * 
     *
     * @var ClimateState
     */
    protected $response;
    /**
     * 
     *
     * @return ClimateState
     */
    public function getResponse() : ClimateState
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ClimateState $response
     *
     * @return self
     */
    public function setResponse(ClimateState $response) : self
    {
        $this->response = $response;
        return $this;
    }
}