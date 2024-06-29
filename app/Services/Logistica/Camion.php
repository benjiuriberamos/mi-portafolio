<?php

namespace App\Services\Logistica;

use App\Services\Logistica\Interfaces\Transporte;

class Camion implements Transporte
{

    public function tranportar(): string
    {
        return "Transporta con Camion";
    }
}
