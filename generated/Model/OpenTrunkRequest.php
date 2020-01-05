<?php

namespace Tesla\Api\Model;

class OpenTrunkRequest
{
    /**
     * The trunk to open. `front` or `rear
     *
     * @var string
     */
    protected $whichTrunk;
    /**
     * The trunk to open. `front` or `rear
     *
     * @return string
     */
    public function getWhichTrunk() : string
    {
        return $this->whichTrunk;
    }
    /**
     * The trunk to open. `front` or `rear
     *
     * @param string $whichTrunk
     *
     * @return self
     */
    public function setWhichTrunk(string $whichTrunk) : self
    {
        $this->whichTrunk = $whichTrunk;
        return $this;
    }
}