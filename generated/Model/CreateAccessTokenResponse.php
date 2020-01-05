<?php

namespace Tesla\Api\Model;

class CreateAccessTokenResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $accessToken;
    /**
     * 
     *
     * @var string
     */
    protected $tokenType;
    /**
     * 
     *
     * @var int
     */
    protected $expiresIn;
    /**
     * 
     *
     * @var int
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $refreshToken;
    /**
     * 
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * 
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTokenType() : string
    {
        return $this->tokenType;
    }
    /**
     * 
     *
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(string $tokenType) : self
    {
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiresIn() : int
    {
        return $this->expiresIn;
    }
    /**
     * 
     *
     * @param int $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(int $expiresIn) : self
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedAt() : int
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param int $createdAt
     *
     * @return self
     */
    public function setCreatedAt(int $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRefreshToken() : string
    {
        return $this->refreshToken;
    }
    /**
     * 
     *
     * @param string $refreshToken
     *
     * @return self
     */
    public function setRefreshToken(string $refreshToken) : self
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }
}