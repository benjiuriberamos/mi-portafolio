<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Sofa;

class SofaModerno implements Sofa
{
    public function iAm(): string
    {
        return "SofaModerno";
    }
}
