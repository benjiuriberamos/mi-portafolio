<?php

namespace App\Services\Autos\Interfaces;

interface Builder
{

    public function reset();

    public function setSeats();

    public function setEngine();

    public function setTripComputer();

    public function setGPS();

}
