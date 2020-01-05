<?php

namespace Tesla\Api\Model;

class NavigationRequestRequestValue
{
    /**
     * Must match this syntax "DATA_TO_SEND_TO_NAV_SYSTEM\n\nhttps://goo.gl/maps/X"
     *
     * @var string
     */
    protected $androidIntentExtraTEXT;
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
}