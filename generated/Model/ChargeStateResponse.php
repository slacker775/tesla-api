<?php

namespace Tesla\Api\Model;

class ChargeStateResponse
{
    /**
     * 
     *
     * @var ChargeState
     */
    protected $response;
    /**
     * 
     *
     * @return ChargeState
     */
    public function getResponse() : ChargeState
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ChargeState $response
     *
     * @return self
     */
    public function setResponse(ChargeState $response) : self
    {
        $this->response = $response;
        return $this;
    }
}