<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Mesa;

class MesaVictoriana implements Mesa
{
    public function iAm(): string
    {
        return "MesaVictoriana";
    }
}
