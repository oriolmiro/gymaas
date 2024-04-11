<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ICC;

class IccTest extends TestCase
{
    /**
     * Verifica si la relación cintura-cadera se calcula correctamente.
     *
     * @return void
     */
    public function testCalculateICC()
    {
        // Datos de prueba
        $waist = 80; // Ejemplo de cintura
        $hip = 100; // Ejemplo de cadera

        // Instanciar el modelo ICC
        $iccCalculator = new ICC();

        // Calcular la relación cintura-cadera (ICC)
        $icc = $iccCalculator->calculateICC($waist, $hip);

        // Verificar que el resultado es el esperado
        $this->assertEquals(0.8, $icc); // La relación cintura-cadera esperada es 0.8 para estos datos
    }

    /**
     * Verifica si se manejan correctamente los casos donde los datos son inválidos.
     *
     * @return void
     */
    public function testInvalidData()
    {
        // Datos de prueba inválidos
        $waist = 0; // Cintura inválida
        $hip = 100; // Cadera válida

        // Instanciar el modelo ICC
        $iccCalculator = new ICC();

        // Verificar que se lance una excepción al calcular ICC con datos inválidos
        $this->expectException(\InvalidArgumentException::class);
        $icc = $iccCalculator->calculateICC($waist, $hip);
    }
}
