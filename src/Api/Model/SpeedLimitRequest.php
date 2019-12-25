<?php

namespace Tesla\Api\Model;

class SpeedLimitRequest
{
    /**
     * The current, or if activating, new, speed limit PIN
     *
     * @var string
     */
    protected $pin;
    /**
     * The current, or if activating, new, speed limit PIN
     *
     * @return string
     */
    public function getPin() : string
    {
        return $this->pin;
    }
    /**
     * The current, or if activating, new, speed limit PIN
     *
     * @param string $pin
     *
     * @return self
     */
    public function setPin(string $pin) : self
    {
        $this->pin = $pin;
        return $this;
    }
}