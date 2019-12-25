<?php

namespace Tesla\Api\Model;

class MobileAccessResponse
{
    /**
     * 
     *
     * @var bool
     */
    protected $response;
    /**
     * 
     *
     * @return bool
     */
    public function getResponse() : bool
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param bool $response
     *
     * @return self
     */
    public function setResponse(bool $response) : self
    {
        $this->response = $response;
        return $this;
    }
}