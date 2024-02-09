<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculoIndiceMasaController;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\TestCase;
use App\Models\IndiceMasa;

class TesteoCalculadoraMasa extends TestCase
{
    /**
     * testeo para el modleo IndiceMasa
     */

    public function test_calcuMasa()
{
    $weight = 70; // variables de ejemplo
    $height = 1.75;

    $calcularIbm = new IndiceMasa();//creo el objeto
    $resultado = $calcularIbm->calculIndiceMasa($weight, $height);//llamo al objeto y su función

    
    $esperado = $weight / ($height * $height);//el resultado que se espera

    // verifico
    $this->assertEquals($esperado, $resultado);
}
}
