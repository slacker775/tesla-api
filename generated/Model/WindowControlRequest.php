<?php

namespace Tesla\Api\Model;

class WindowControlRequest
{
    /**
     * 
     *
     * @var float
     */
    protected $lat;
    /**
     * 
     *
     * @var float
     */
    protected $long;
    /**
     * 
     *
     * @var string
     */
    protected $command;
    /**
     * 
     *
     * @return float
     */
    public function getLat() : float
    {
        return $this->lat;
    }
    /**
     * 
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat(float $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLong() : float
    {
        return $this->long;
    }
    /**
     * 
     *
     * @param float $long
     *
     * @return self
     */
    public function setLong(float $long) : self
    {
        $this->long = $long;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommand() : string
    {
        return $this->command;
    }
    /**
     * 
     *
     * @param string $command
     *
     * @return self
     */
    public function setCommand(string $command) : self
    {
        $this->command = $command;
        return $this;
    }
}