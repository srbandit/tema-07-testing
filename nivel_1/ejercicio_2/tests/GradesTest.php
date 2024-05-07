<?php

use PHPUnit\Framework\TestCase;
use Grades;

class GradesTest extends TestCase{

    public function testSiElNumeroRecibidoEstaEnRangoValido(){
        $nota = new Grades();
        $nota->verNota();
        $this->assertTrue($nota->verNota() >= 0 && $nota->verNota() <= 100);
    }

    public function testSiElNumeroRecibidoEsMayoroIgualaSesenta(){
        $nota = new Grades();
        $nota->verNota();
        $this->assertTrue($nota->verNota() >= 60);
    }

}

?>