<?php

namespace App\Services\FabricaMuebles\Fabrica;

use App\Services\FabricaMuebles\Interfaces\Mesa;
use App\Services\FabricaMuebles\Interfaces\Sofa;
use App\Services\FabricaMuebles\Interfaces\Silla;
use App\Services\FabricaMuebles\Muebles\MesaVictoriana;
use App\Services\FabricaMuebles\Muebles\SofaVictoriana;
use App\Services\FabricaMuebles\Muebles\SillaVictoriana;
use App\Services\FabricaMuebles\Interfaces\FabricaMueble;

class FabricaMuebleVictoriana implements FabricaMueble
{
    public function crearSilla(): Silla
    {
        return new SillaVictoriana();
    }

    public function crearSofa(): Sofa
    {
        return new SofaVictoriana();
    }

    public function crearMesa(): Mesa
    {
        return new MesaVictoriana();
    }
}
