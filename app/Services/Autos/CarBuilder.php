<?php

namespace App\Services\Autos;

use App\Services\Autos\Classes\Car;
use App\Services\Autos\Interfaces\Builder;

class CarBuilder implements Builder
{
    private Car $car;

    public function __construct() {
        $this->reset();
    }
    
    public function reset()
    {
        $this->car = new Car();
    }

    public function setSeats()
    {
        
    }

    public function setEngine()
    {
        
    }

    public function setTripComputer()
    {
        
    }

    public function setGPS()
    {
        
    }

    public function getResult(): Car
    {
        return $this->car;
    }

}
