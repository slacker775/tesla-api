<?php

namespace Tesla\Api\Model;

class RemoteSeatHeaterRequest
{
    /**
     * The desired seat to adjust the heater for.  SeatHeaterFrontLeft: 0, SeatHeaterFrontRight: 1, SeatHeaterRearLeft: 2, SeatHeaterRearLeftBack: 3, SeatHeaterRearCenter: 4, SeatHeaterRearRight: 5, SeatHeaterRearRightBack: 6, SeatHeater3rdRowLeft: 7, SeatHeater3rdRowRight: 8
     *
     * @var int
     */
    protected $heater;
    /**
     * Seat heater level
     *
     * @var int
     */
    protected $level;
    /**
     * The desired seat to adjust the heater for.  SeatHeaterFrontLeft: 0, SeatHeaterFrontRight: 1, SeatHeaterRearLeft: 2, SeatHeaterRearLeftBack: 3, SeatHeaterRearCenter: 4, SeatHeaterRearRight: 5, SeatHeaterRearRightBack: 6, SeatHeater3rdRowLeft: 7, SeatHeater3rdRowRight: 8
     *
     * @return int
     */
    public function getHeater() : int
    {
        return $this->heater;
    }
    /**
     * The desired seat to adjust the heater for.  SeatHeaterFrontLeft: 0, SeatHeaterFrontRight: 1, SeatHeaterRearLeft: 2, SeatHeaterRearLeftBack: 3, SeatHeaterRearCenter: 4, SeatHeaterRearRight: 5, SeatHeaterRearRightBack: 6, SeatHeater3rdRowLeft: 7, SeatHeater3rdRowRight: 8
     *
     * @param int $heater
     *
     * @return self
     */
    public function setHeater(int $heater) : self
    {
        $this->heater = $heater;
        return $this;
    }
    /**
     * Seat heater level
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * Seat heater level
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
}