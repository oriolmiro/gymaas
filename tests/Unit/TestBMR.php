<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\BASALMETABOLICRATE;

class TestBMR extends TestCase
{
    public function test_CalculateBMRForMale()
    {
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(70, 180, 30, 'male');
        $this->assertEquals(1680.0, $bmr, "BMR calculation for male did not return expected result");
    }

    public function testCalculateBMRForFemale()
    {
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(60, 160, 25, 'female');
        $this->assertEquals(1314.0, $bmr, "BMR calculation for female did not return expected result");
    }

    public function testInvalidGender()
    {
        $this->expectException(\InvalidArgumentException::class);
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(70, 180, 30, 'invalid');
    }

    public function testInvalidWeight()
    {
        $this->expectException(\InvalidArgumentException::class);
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(0, 180, 30, 'male');
    }

    public function testInvalidHeight()
    {
        $this->expectException(\InvalidArgumentException::class);
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(70, 0, 30, 'male');
    }

    public function testInvalidAge()
    {
        $this->expectException(\InvalidArgumentException::class);
        $bmrCalculator = new BASALMETABOLICRATE();
        $bmr = $bmrCalculator->calculateBMR(70, 180, 0, 'male');
    }
}
