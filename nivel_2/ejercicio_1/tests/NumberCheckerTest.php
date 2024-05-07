<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class NumberCheckerTest extends TestCase
{
    
     #[DataProvider('providerNumberEven')]
    public function testChequeaNumeroPar(int $numero,bool $expected)
    {   
        $checker = new NumberChecker($numero);
        $this->assertTrue($checker->isEven() == $expected);
    }

    #[DataProvider('providerNumberPositive')]
    public function testChequeaNumeroPositivo(int $numero,bool $expected)
    {   
        $checker = new NumberChecker($numero);
        $this->assertTrue($checker->isPositive() == $expected);
    }

    public static function providerNumberEven(){
        return [
            'data set 1' => [1, false],
            'data set 2' => [2, true],
            'data set 3' => [3, false],
            'data set 4' => [4, true],
            'data set 5' => [5, false],
            'data set 6' => [6, true],
            'data set 7' => [7, false],
            'data set 8' => [8, true],
            'data set 9' => [9, false],
            'data set 10' => [10, true],
        ];
    }

    public static function providerNumberPositive(){
        return [
            'data set 1' => [-1, false],
            'data set 2' => [2, true],
            'data set 3' => [-3, false],
            'data set 4' => [4, true],
            'data set 5' => [-5, false],
            'data set 6' => [6, true],
            'data set 7' => [-7, false],
            'data set 8' => [8, true],
            'data set 9' => [-9, false],
            'data set 10' => [10, true],
        ];
    }


}
