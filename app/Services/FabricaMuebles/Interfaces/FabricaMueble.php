<?php

namespace App\Services\FabricaMuebles\Interfaces;

interface FabricaMueble
{
    public function crearSilla(): Silla;

    public function crearSofa(): Sofa;

    public function crearMesa(): Mesa;
}
