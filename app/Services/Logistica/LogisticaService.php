<?php

namespace App\Services\Logistica;

class LogisticaService
{
                
    public function aplicarLogistica(Logistica $logistica) 
    {
        return $logistica->planEntrega();
    }
}
