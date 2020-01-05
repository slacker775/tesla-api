<?php

namespace Tesla\Api\Model;

class RemoteStartRequest
{
    /**
     * The password to the authenticated my.teslamotors.com account.
     *
     * @var string
     */
    protected $password;
    /**
     * The password to the authenticated my.teslamotors.com account.
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * The password to the authenticated my.teslamotors.com account.
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