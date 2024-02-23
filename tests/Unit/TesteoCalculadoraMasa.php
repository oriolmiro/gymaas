<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculoIndiceMasaController;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\TestCase;
use App\Models\IndiceMasa;

class TesteoCalculadoraMasa extends TestCase
{
    /**
     * Testeo para el modelo IndiceMasa
     */

    public function test_calcuMasa()
    {
        $weight = 10; // parámetros
        $height = 10;

        $calcularIbm = new IndiceMasa(); // Creo el objeto

        $resultado = $calcularIbm->calculIndiceMasa($weight, $height); // Llamo al objeto y su función
        $esperado = $weight / ($height * $height); // El resultado que se espera


        // Verifico que el resultado del cálculo sea el esperado
        $this->assertEquals($esperado, $resultado);
    }
}
