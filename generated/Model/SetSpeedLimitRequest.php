<?php

namespace Tesla\Api\Model;

class SetSpeedLimitRequest
{
    /**
     * The speed limit to set, in Miles per Hour
     *
     * @var int
     */
    protected $limitMph;
    /**
     * The speed limit to set, in Miles per Hour
     *
     * @return int
     */
    public function getLimitMph() : int
    {
        return $this->limitMph;
    }
    /**
     * The speed limit to set, in Miles per Hour
     *
     * @param int $limitMph
     *
     * @return self
     */
    public function setLimitMph(int $limitMph) : self
    {
        $this->limitMph = $limitMph;
        return $this;
    }
}