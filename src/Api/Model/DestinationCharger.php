<?php

namespace Tesla\Api\Model;

class DestinationCharger
{
    /**
     * 
     *
     * @var DestinationChargerLocation
     */
    protected $location;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'destination';
    /**
     * 
     *
     * @var float
     */
    protected $distanceMiles;
    /**
     * 
     *
     * @return DestinationChargerLocation
     */
    public function getLocation() : DestinationChargerLocation
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param DestinationChargerLocation $location
     *
     * @return self
     */
    public function setLocation(DestinationChargerLocation $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
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
     * @return float
     */
    public function getDistanceMiles() : float
    {
        return $this->distanceMiles;
    }
    /**
     * 
     *
     * @param float $distanceMiles
     *
     * @return self
     */
    public function setDistanceMiles(float $distanceMiles) : self
    {
        $this->distanceMiles = $distanceMiles;
        return $this;
    }
}