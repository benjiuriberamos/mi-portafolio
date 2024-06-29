<?php

namespace App\Services\FabricaMuebles\Fabrica;

use App\Services\FabricaMuebles\Interfaces\Mesa;
use App\Services\FabricaMuebles\Interfaces\Sofa;
use App\Services\FabricaMuebles\Interfaces\Silla;
use App\Services\FabricaMuebles\Muebles\MesaArdeco;
use App\Services\FabricaMuebles\Muebles\SofaArdeco;
use App\Services\FabricaMuebles\Muebles\SillaArdeco;
use App\Services\FabricaMuebles\Interfaces\FabricaMueble;

class FabricaMuebleArdeco implements FabricaMueble
{
    public function crearSilla(): Silla
    {
        return new SillaArdeco();
    }

    public static function crearSilla2(): Silla
    {
        return new SillaArdeco();
    }

    public function crearSofa(): Sofa
    {
        return new SofaArdeco();
    }

    public function crearMesa(): Mesa
    {
        return new MesaArdeco();
    }
}
