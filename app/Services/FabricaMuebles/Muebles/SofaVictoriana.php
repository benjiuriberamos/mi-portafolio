<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Sofa;

class SofaVictoriana implements Sofa
{
    public function iAm(): string
    {
        return "SofaVictoriana";
    }
}
