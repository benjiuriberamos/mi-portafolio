<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Silla;

class SillaVictoriana implements Silla
{
    public function iAm(): string
    {
        return "SillaVictoriana";
    }
}
