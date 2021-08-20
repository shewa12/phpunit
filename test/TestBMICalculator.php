<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\BMICalculator;

/**
 * @covers TestBMICalculator
 */
class TestBMICalculator extends TestCase
{

    public function testUnderWeight()
    {
        $bmi        = new BMICalculator;
        $bmi->BMI   = 10;
        $result     = $bmi->textResult();
        $expected   = 'under weight';

        $this->assertSame($expected, $result);
    }

    public function testNormalWeight()
    {
        $bmi        = new BMICalculator;
        $bmi->BMI   = 22;
        $result     = $bmi->textResult();
        $expected   = 'normal weight';

        $this->assertSame($expected, $result);
    }

    public function testOverWeight()
    {
        $bmi        = new BMICalculator;
        $bmi->BMI   = 30;
        $result     = $bmi->textResult();
        $expected   = 'over weight';

        $this->assertSame($expected, $result);
    }
}