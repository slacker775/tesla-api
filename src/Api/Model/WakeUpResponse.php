<?php

namespace Tesla\Api\Model;

class WakeUpResponse
{
    /**
     * 
     *
     * @var WakeUpResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @return WakeUpResponseResponse
     */
    public function getResponse() : WakeUpResponseResponse
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param WakeUpResponseResponse $response
     *
     * @return self
     */
    public function setResponse(WakeUpResponseResponse $response) : self
    {
        $this->response = $response;
        return $this;
    }
}