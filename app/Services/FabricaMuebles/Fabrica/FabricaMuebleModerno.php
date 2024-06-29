<?php

namespace App\Services\FabricaMuebles\Fabrica;

use App\Services\FabricaMuebles\Interfaces\Mesa;
use App\Services\FabricaMuebles\Interfaces\Sofa;
use App\Services\FabricaMuebles\Interfaces\Silla;
use App\Services\FabricaMuebles\Muebles\MesaModerno;
use App\Services\FabricaMuebles\Muebles\SofaModerno;
use App\Services\FabricaMuebles\Muebles\SillaModerno;
use App\Services\FabricaMuebles\Interfaces\FabricaMueble;

class FabricaMuebleModerno implements FabricaMueble
{
    public function crearSilla(): Silla
    {
        return new SillaModerno();
    }

    public function crearSofa(): Sofa
    {
        return new SofaModerno();
    }

    public function crearMesa(): Mesa
    {
        return new MesaModerno();
    }
}
