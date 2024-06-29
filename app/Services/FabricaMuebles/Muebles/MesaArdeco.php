<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Mesa;

class MesaArdeco implements Mesa
{
    public function iAm(): string
    {
        return "MesaArdeco";
    }
}