<?php

namespace Tesla\Api\Model;

class NavigationRequestRequest
{
    /**
     * Do not change
     *
     * @var string
     */
    protected $type = 'share_ext_content_raw';
    /**
     * 
     *
     * @var NavigationRequestRequestValue
     */
    protected $value;
    /**
     * Do not change
     *
     * @var string
     */
    protected $locale = 'en-us';
    /**
     * Unix timestamp
     *
     * @var string
     */
    protected $timestampMs;
    /**
     * Do not change
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Do not change
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
     * @return NavigationRequestRequestValue
     */
    public function getValue() : NavigationRequestRequestValue
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param NavigationRequestRequestValue $value
     *
     * @return self
     */
    public function setValue(NavigationRequestRequestValue $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Do not change
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Do not change
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
     * Unix timestamp
     *
     * @return string
     */
    public function getTimestampMs() : string
    {
        return $this->timestampMs;
    }
    /**
     * Unix timestamp
     *
     * @param string $timestampMs
     *
     * @return self
     */
    public function setTimestampMs(string $timestampMs) : self
    {
        $this->timestampMs = $timestampMs;
        return $this;
    }
}