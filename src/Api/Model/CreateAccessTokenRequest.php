<?php

namespace Tesla\Api\Model;

class CreateAccessTokenRequest
{
    /**
     * The type of oAuth grant. Always "password"
     *
     * @var string
     */
    protected $grantType;
    /**
     * The oAuth client ID
     *
     * @var string
     */
    protected $clientId;
    /**
     * The oAuth client secret
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * The email for my.teslamotors.com
     *
     * @var string
     */
    protected $email;
    /**
     * The password for my.teslamotors.com
     *
     * @var string
     */
    protected $password;
    /**
     * The type of oAuth grant. Always "password"
     *
     * @return string
     */
    public function getGrantType() : string
    {
        return $this->grantType;
    }
    /**
     * The type of oAuth grant. Always "password"
     *
     * @param string $grantType
     *
     * @return self
     */
    public function setGrantType(string $grantType) : self
    {
        $this->grantType = $grantType;
        return $this;
    }
    /**
     * The oAuth client ID
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * The oAuth client ID
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The oAuth client secret
     *
     * @return string
     */
    public function getClientSecret() : string
    {
        return $this->clientSecret;
    }
    /**
     * The oAuth client secret
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret) : self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * The email for my.teslamotors.com
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email for my.teslamotors.com
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The password for my.teslamotors.com
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * The password for my.teslamotors.com
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