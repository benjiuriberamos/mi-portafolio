<?php

namespace App\Services\FabricaMuebles;

use App\Services\FabricaMuebles\Interfaces\FabricaMueble;

class ClienteFabrica
{

    public function __construct(private FabricaMueble $abstractfactory)
    {
    }
}
