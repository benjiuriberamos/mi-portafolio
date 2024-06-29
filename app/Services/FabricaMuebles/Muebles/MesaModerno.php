<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Mesa;

class MesaModerno implements Mesa
{
    public function iAm(): string
    {
        return "MesaModerno";
    }
}

