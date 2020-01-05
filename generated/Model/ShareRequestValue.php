<?php

namespace Tesla\Api\Model;

class ShareRequestValue
{
    /**
     * Must match this syntax "DATA_TO_SEND_TO_NAV_SYSTEM\n\nhttps://goo.gl/maps/X"
     *
     * @var string
     */
    protected $androidIntentExtraTEXT;
    /**
     * Latitude of destination to send. Only send with 'long'
     *
     * @var float
     */
    protected $lat;
    /**
     * Longitude of destination to send. Only send with 'lat'
     *
     * @var float
     */
    protected $long;
    /**
     * Must match this syntax "DATA_TO_SEND_TO_NAV_SYSTEM\n\nhttps://goo.gl/maps/X"
     *
     * @return string
     */
    public function getAndroidIntentExtraTEXT() : string
    {
        return $this->androidIntentExtraTEXT;
    }
    /**
     * Must match this syntax "DATA_TO_SEND_TO_NAV_SYSTEM\n\nhttps://goo.gl/maps/X"
     *
     * @param string $androidIntentExtraTEXT
     *
     * @return self
     */
    public function setAndroidIntentExtraTEXT(string $androidIntentExtraTEXT) : self
    {
        $this->androidIntentExtraTEXT = $androidIntentExtraTEXT;
        return $this;
    }
    /**
     * Latitude of destination to send. Only send with 'long'
     *
     * @return float
     */
    public function getLat() : float
    {
        return $this->lat;
    }
    /**
     * Latitude of destination to send. Only send with 'long'
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat(float $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Longitude of destination to send. Only send with 'lat'
     *
     * @return float
     */
    public function getLong() : float
    {
        return $this->long;
    }
    /**
     * Longitude of destination to send. Only send with 'lat'
     *
     * @param float $long
     *
     * @return self
     */
    public function setLong(float $long) : self
    {
        $this->long = $long;
        return $this;
    }
}