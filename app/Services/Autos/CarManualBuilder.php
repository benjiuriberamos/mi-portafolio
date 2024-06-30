<?php

namespace App\Services\Autos;

use App\Services\Autos\Classes\Manual;
use App\Services\Autos\Interfaces\Builder;

class ManualBuilder implements Builder
{
    private Manual $manual;

    public function __construct() {
        $this->reset();
    }

    public function reset()
    {
        $this->manual = new Manual();
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

    public function getResult(): Manual
    {
        return $this->manual;
    }

}
