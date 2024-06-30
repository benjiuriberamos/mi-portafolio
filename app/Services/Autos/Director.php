<?php

namespace App\Services\Autos;

use App\Services\Autos\Interfaces\Builder;

class Director
{

    public function constructSportCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats();
        $builder->setEngine();
        $builder->setTripComputer();
        $builder->setGPS();

    }

    public function constructSUV(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats();
        $builder->setEngine();
        $builder->setTripComputer();
        $builder->setGPS();

    }
    
}
