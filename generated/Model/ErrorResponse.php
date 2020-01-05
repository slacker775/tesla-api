<?php

namespace Tesla\Api\Model;

class ErrorResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $response;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * 
     *
     * @return string
     */
    public function getResponse() : string
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param string $response
     *
     * @return self
     */
    public function setResponse(string $response) : self
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrorDescription() : string
    {
        return $this->errorDescription;
    }
    /**
     * 
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription) : self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
}