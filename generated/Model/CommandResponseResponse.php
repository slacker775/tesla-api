<?php

namespace Tesla\Api\Model;

class CommandResponseResponse
{
    /**
     * 
     *
     * @var bool
     */
    protected $result;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @return bool
     */
    public function getResult() : bool
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param bool $result
     *
     * @return self
     */
    public function setResult(bool $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
}