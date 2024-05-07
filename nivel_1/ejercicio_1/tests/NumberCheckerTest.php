<?php

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{

    public function testChequeaNumeroPositivo()
    {
        $numero = new NumberChecker(10);
        $this->assertTrue($numero->isPositive(), "Es positivo");
    }

    public function testChequeaNumeroPar()
    {
        $numero2 = new NumberChecker(2);
        $this->assertTrue(
            $numero2->isEven(),
            "es par"
        );
    }
}
