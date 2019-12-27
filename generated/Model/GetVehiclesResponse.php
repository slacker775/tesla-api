<?php

namespace Tesla\Api\Model;

class GetVehiclesResponse
{
    /**
     * 
     *
     * @var Vehicle[]
     */
    protected $response;
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @return Vehicle[]
     */
    public function getResponse() : array
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param Vehicle[] $response
     *
     * @return self
     */
    public function setResponse(array $response) : self
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
}