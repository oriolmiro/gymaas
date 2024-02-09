<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculoIndiceMasaController;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\TestCase;
use App\Models\IndiceMasa;

class TesteoCalculadoraMasa extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_calcuMasa()
{
    $weight = 70; // Corregido de 7.0 a 70 para el ejemplo
    $height = 1.75;

    $calcularIbm = new IndiceMasa();
    $resultado = $calcularIbm->calculIndiceMasa($weight, $height);

    // Calcula el IMC esperado manualmente o define el valor esperado directamente
    $esperado = $weight / ($height * $height);

    // Compara el resultado con el valor esperado
    $this->assertEquals($esperado, $resultado);
}
}
