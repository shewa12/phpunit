<?php

namespace App;

class BMICalculator 
{

    public $BMI;
    public $weight;
    public $height;

    public function calculateBMI():string
    {
        return round($weight / pow($height, 2));
    }

    public function textResult():string
    {
        if ($this->BMI > 25 ) {
            return 'over weight';
        } elseif ($this->BMI >= 18 &&  $this->BMI <= 25) {
            return 'normal weight';
        } else {
            return 'under weight';
        }
    }
}