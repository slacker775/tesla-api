<?php

namespace Tesla\Api\Model;

class SetChargeLimitRequest
{
    /**
     * Percentage to set Charge Limit to.
     *
     * @var int
     */
    protected $percent;
    /**
     * Percentage to set Charge Limit to.
     *
     * @return int
     */
    public function getPercent() : int
    {
        return $this->percent;
    }
    /**
     * Percentage to set Charge Limit to.
     *
     * @param int $percent
     *
     * @return self
     */
    public function setPercent(int $percent) : self
    {
        $this->percent = $percent;
        return $this;
    }
}