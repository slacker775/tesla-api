<?php

namespace Tesla\Api\Model;

class ShareRequest
{
    /**
     * Change to "share_dest_content_coords" if using lat/long
     *
     * @var string
     */
    protected $type = 'share_ext_content_raw';
    /**
     * 
     *
     * @var ShareRequestValue
     */
    protected $value;
    /**
     * Locale this request should be treated as
     *
     * @var string
     */
    protected $locale;
    /**
     * UNIX timestamp indicating when this request was sent
     *
     * @var float
     */
    protected $timestamp;
    /**
     * Change to "share_dest_content_coords" if using lat/long
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Change to "share_dest_content_coords" if using lat/long
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return ShareRequestValue
     */
    public function getValue() : ShareRequestValue
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param ShareRequestValue $value
     *
     * @return self
     */
    public function setValue(ShareRequestValue $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Locale this request should be treated as
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Locale this request should be treated as
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->locale = $locale;
        return $this;
    }
    /**
     * UNIX timestamp indicating when this request was sent
     *
     * @return float
     */
    public function getTimestamp() : float
    {
        return $this->timestamp;
    }
    /**
     * UNIX timestamp indicating when this request was sent
     *
     * @param float $timestamp
     *
     * @return self
     */
    public function setTimestamp(float $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}