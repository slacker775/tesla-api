<?php

namespace Tesla\Api\Model;

class VehicleStateSoftwareUpdate
{
    /**
     * 
     *
     * @var int
     */
    protected $expectedDurationSec;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $downloadPerc;
    /**
     * 
     *
     * @var int
     */
    protected $installPerc;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return int
     */
    public function getExpectedDurationSec() : int
    {
        return $this->expectedDurationSec;
    }
    /**
     * 
     *
     * @param int $expectedDurationSec
     *
     * @return self
     */
    public function setExpectedDurationSec(int $expectedDurationSec) : self
    {
        $this->expectedDurationSec = $expectedDurationSec;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDownloadPerc() : int
    {
        return $this->downloadPerc;
    }
    /**
     * 
     *
     * @param int $downloadPerc
     *
     * @return self
     */
    public function setDownloadPerc(int $downloadPerc) : self
    {
        $this->downloadPerc = $downloadPerc;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInstallPerc() : int
    {
        return $this->installPerc;
    }
    /**
     * 
     *
     * @param int $installPerc
     *
     * @return self
     */
    public function setInstallPerc(int $installPerc) : self
    {
        $this->installPerc = $installPerc;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}