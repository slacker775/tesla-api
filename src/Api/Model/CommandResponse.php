<?php

namespace Tesla\Api\Model;

class CommandResponse
{
    /**
     * 
     *
     * @var CommandResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @return CommandResponseResponse
     */
    public function getResponse() : CommandResponseResponse
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param CommandResponseResponse $response
     *
     * @return self
     */
    public function setResponse(CommandResponseResponse $response) : self
    {
        $this->response = $response;
        return $this;
    }
}