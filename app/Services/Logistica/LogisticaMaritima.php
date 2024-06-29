<?php

namespace App\Services\Logistica;

use App\Services\Logistica\Interfaces\Transporte;

class LogisticaMaritima extends Logistica {

    public function crearTransporte(): Transporte
    {
        return new Barco();
    }

}