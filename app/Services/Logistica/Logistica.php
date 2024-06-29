<?php

namespace App\Services\Logistica;

use App\Services\Logistica\Interfaces\Transporte;


abstract class Logistica {

    abstract public function crearTransporte(): Transporte;

    public function planEntrega() 
    {
        $transporte = $this->crearTransporte();
        return $transporte->tranportar();
    }
}