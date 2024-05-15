<?php

namespace Tests\Unit;

use App\Models\BASALMETABOLICRATE;
use PHPUnit\Framework\TestCase;

class BMROtherTest extends TestCase
{
    public function test_calculateBMR_male()
    {
        $bmrCalculator = new BASALMETABOLICRATE();

        $weight = 70; // kg
        $height = 180; // cm
        $age = 30; // años
        $gender = 'male';

        $expectedBMR = 10 * $weight + 6.25 * $height - 5 * $age + 5;

        $bmr = $bmrCalculator->calculateBMR($weight, $height, $age, $gender);

        $this->assertEquals($expectedBMR, $bmr);
    }

    public function test_calculateBMR_female()
    {
        $bmrCalculator = new BASALMETABOLICRATE();

        $weight = 60; // kg
        $height = 165; // cm
        $age = 25; // años
        $gender = 'female';

        $expectedBMR = 10 * $weight + 6.25 * $height - 5 * $age - 161;

        $bmr = $bmrCalculator->calculateBMR($weight, $height, $age, $gender);

        $this->assertEquals($expectedBMR, $bmr);
    }

    public function test_calculateBMR_invalidWeight()
    {
        $this->expectException(\InvalidArgumentException::class);

        $bmrCalculator = new BASALMETABOLICRATE();

        $weight = -10; // peso negativo
        $height = 170; // cm
        $age = 35; // años
        $gender = 'male';

        $bmrCalculator->calculateBMR($weight, $height, $age, $gender);
    }

}
