<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculoIndiceMasaController;
use PHPUnit\Framework\TestCase;
//use App\Http\Controllers\CalculoIndiceMasaController;


class TesteoCalculadoraMasa extends TestCase
{
    /**
     * A basic test example.
     */
    public function calcuMasa(): void
    {
       
       $objeto = new CalculoIndiceMasaController();
        $this->assertTrue("Saluda" == $objeto->saluda());
    }
}
