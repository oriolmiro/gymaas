<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\CalculoIndiceMasaController;
use Illuminate\Http\Client\Request;
use App\Models\IndiceMasa;

class CalculadoresTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Testa el cálculo del IMC con datos no numéricos.
     *
     * @return void
     */
    public function testCalculaIMCConDatosNoNumericos()
    {
        $response = $this->postJson('/api/calcular-imc', [
            'weight' => 'abc',
            'height' => 1.75
        ]);

        $response
            ->assertStatus(422);
    }
}
