<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Silla;

class SillaModerno implements Silla
{
    public function iAm(): string
    {
        return "SillaModerno";
    }
}
