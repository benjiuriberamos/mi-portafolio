<?php

namespace App\Services\FabricaMuebles\Muebles;

use App\Services\FabricaMuebles\Interfaces\Sofa;

class SofaArdeco implements Sofa
{
    public function iAm(): string
    {
        return "SofaArdeco";
    }
}
