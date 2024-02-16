<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\PesoIdeal;
class TestCalculaPesoIdeal extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_pesoIdeal(): void
    {
        $height = 180; // parámetros
        $gender = 'female';

        $calculaPesoIdeal = new  PesoIdeal(); //creo el objeto 
        $resultado = $calculaPesoIdeal->caculaPesoIdeal($height, $gender);
        $esperado = 45 + 2.3 * ($height -60);// El resultado que se espera

        // Verifico que el resultado del cálculo sea el esperado
        $this->assertEquals($esperado, $resultado);
        
        
    }
}
