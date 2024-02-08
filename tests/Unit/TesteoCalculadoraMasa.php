<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculoIndiceMasaController;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\TestCase;
//use App\Http\Controllers\CalculoIndiceMasaController;


class TesteoCalculadoraMasa extends TestCase
{
    /**
     * A basic test example.
     */
    // public function calcuMasa(): void
    // {
    //primera verificación para ver si funciona 
    // $objeto = new CalculoIndiceMasaController();
    // $this->assertTrue("Saluda" == $objeto->saluda());
    // }

    public function test_calcuMasa(): void
    {
        $objeto = new CalculoIndiceMasaController();
        $resultado = $objeto->calculIndiceMasa('drgrgr'); // Pasando un valor no numérico
        
        $this->assertEquals('La altura tiene que ser un número', $resultado);
    }
    
}
