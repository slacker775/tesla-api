<?php

namespace Tesla\Api\Model;

class SentryModeRequest
{
    /**
     * 
     *
     * @var bool
     */
    protected $on;
    /**
     * 
     *
     * @return bool
     */
    public function getOn() : bool
    {
        return $this->on;
    }
    /**
     * 
     *
     * @param bool $on
     *
     * @return self
     */
    public function setOn(bool $on) : self
    {
        $this->on = $on;
        return $this;
    }
}