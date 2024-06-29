<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Silla;

class SillaArdeco implements Silla
{
    public function iAm(): string
    {
        return "SillaArdeco";
    }
}
