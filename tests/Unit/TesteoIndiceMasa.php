<?php

namespace Tests\Unit;

use App\Models\IndiceMasa;
use PHPUnit\Framework\TestCase;

class TesteoIndiceMasa extends TestCase
{
    public function test_calculIndiceMasa()
    {
        $indiceMasaCalculator = new IndiceMasa();

        // Caso de prueba 1: Altura y peso válidos
        $weight = 70; // kg
        $height = 1.75; // metros

        $expectedIMC = $weight / ($height * $height);

        $imc = $indiceMasaCalculator->calculIndiceMasa($weight, $height);

        $this->assertEquals($expectedIMC, $imc);

        // Caso de prueba 2: Altura negativa
        $this->expectException(\InvalidArgumentException::class);
        $indiceMasaCalculator->calculIndiceMasa($weight, -1);

        // Caso de prueba 3: Peso negativo
        $this->expectException(\InvalidArgumentException::class);
        $indiceMasaCalculator->calculIndiceMasa(-1, $height);

        // Caso de prueba 4: Altura no numérica
        $this->expectException(\InvalidArgumentException::class);
        $indiceMasaCalculator->calculIndiceMasa($weight, 'altura');

        // Caso de prueba 5: Peso no numérico
        $this->expectException(\InvalidArgumentException::class);
        $indiceMasaCalculator->calculIndiceMasa('peso', $height);
    }
}
