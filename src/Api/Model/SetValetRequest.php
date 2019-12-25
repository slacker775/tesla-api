<?php

namespace Tesla\Api\Model;

class SetValetRequest
{
    /**
     * Whether to enable or disable valet mode.
     *
     * @var bool
     */
    protected $on;
    /**
     * (optional) A 4 digit PIN code to unlock the car.
     *
     * @var string
     */
    protected $password;
    /**
     * Whether to enable or disable valet mode.
     *
     * @return bool
     */
    public function getOn() : bool
    {
        return $this->on;
    }
    /**
     * Whether to enable or disable valet mode.
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
    /**
     * (optional) A 4 digit PIN code to unlock the car.
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * (optional) A 4 digit PIN code to unlock the car.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
}