<?php

namespace App\Services\Logistica;

use App\Services\Logistica\Interfaces\Transporte;

class Barco implements Transporte
{

    public function tranportar(): string
    {
        return "Transporta con Barco";
    }
}
