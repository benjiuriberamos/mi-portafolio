<?php

namespace App\Services\Logistica;

use App\Services\Logistica\Interfaces\Transporte;

class LogisticaTerrestre extends Logistica {

    public function crearTransporte(): Transporte
    {
        return new Camion();
    }

}