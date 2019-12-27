<?php

namespace Tesla\Api\Model;

class MovePanoRoofRequest
{
    /**
     * The desired state of the panoramic roof. The approximate percent open values for each state are `open` = 100%, `close` = 0%, `comfort` = 80%, and `vent` = ~15%
     *
     * @var string
     */
    protected $state;
    /**
     * The percentage to move the roof to.
     *
     * @var float
     */
    protected $percent;
    /**
     * The desired state of the panoramic roof. The approximate percent open values for each state are `open` = 100%, `close` = 0%, `comfort` = 80%, and `vent` = ~15%
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The desired state of the panoramic roof. The approximate percent open values for each state are `open` = 100%, `close` = 0%, `comfort` = 80%, and `vent` = ~15%
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The percentage to move the roof to.
     *
     * @return float
     */
    public function getPercent() : float
    {
        return $this->percent;
    }
    /**
     * The percentage to move the roof to.
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent) : self
    {
        $this->percent = $percent;
        return $this;
    }
}