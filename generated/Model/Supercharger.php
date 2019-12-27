<?php

namespace Tesla\Api\Model;

class Supercharger
{
    /**
     * 
     *
     * @var SuperchargerLocation
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
    protected $type = 'supercharger';
    /**
     * 
     *
     * @var float
     */
    protected $distanceMiles;
    /**
     * 
     *
     * @var float
     */
    protected $availableStalls;
    /**
     * 
     *
     * @var float
     */
    protected $totalStalls;
    /**
     * 
     *
     * @var bool
     */
    protected $siteClosed;
    /**
     * 
     *
     * @return SuperchargerLocation
     */
    public function getLocation() : SuperchargerLocation
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param SuperchargerLocation $location
     *
     * @return self
     */
    public function setLocation(SuperchargerLocation $location) : self
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
    /**
     * 
     *
     * @return float
     */
    public function getAvailableStalls() : float
    {
        return $this->availableStalls;
    }
    /**
     * 
     *
     * @param float $availableStalls
     *
     * @return self
     */
    public function setAvailableStalls(float $availableStalls) : self
    {
        $this->availableStalls = $availableStalls;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalStalls() : float
    {
        return $this->totalStalls;
    }
    /**
     * 
     *
     * @param float $totalStalls
     *
     * @return self
     */
    public function setTotalStalls(float $totalStalls) : self
    {
        $this->totalStalls = $totalStalls;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSiteClosed() : bool
    {
        return $this->siteClosed;
    }
    /**
     * 
     *
     * @param bool $siteClosed
     *
     * @return self
     */
    public function setSiteClosed(bool $siteClosed) : self
    {
        $this->siteClosed = $siteClosed;
        return $this;
    }
}