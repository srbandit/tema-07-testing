<?php

use PHPUnit\Framework\TestCase;
use Grades;

class GradesTest extends TestCase
{

    public function testSiElNumeroRecibidoEstaEnRangoValido()
    {
        $nota = new Grades(4);

        $this->assertTrue($nota->getGrade() >= 0 && $nota->getGrade() <= 10);
    }


    public function testSiElNumeroRecibidoEsMayoroIgualaSeis()
    {
        $nota = new Grades(6);
        $this->assertTrue($nota->getGrade() >= 6);
    }

    public function testSiElNumeroRecibidoSeEncuentraEntreCuatroPuntoCincoyCincoPuntoNueve()
    {
        $nota = new Grades(5.5);
        $this->assertTrue($nota->getGrade() >= 4.5 && $nota->getGrade() <= 5.9);
    }

    public function testSiElNumeroRecibidoSeEncuentraEntreTresPuntoTresyCuatroPuntoCuatro()
    {
        $nota = new Grades(3.5);
        $this->assertTrue($nota->getGrade() >= 3.3 && $nota->getGrade() <= 4.4);
    }
    
    public function testSiElNumeroRecibidoEsMenoraTresPuntoTres()
    {
        $nota = new Grades(3.2);
        $this->assertTrue($nota->getGrade() < 3.3);
    }
}
