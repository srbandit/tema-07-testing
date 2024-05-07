<?php

class Grades {
    private float $grade = 3.2;

    public function __construct()
    {
        
    }

    public function verNota(){
        return $this->grade * 10;
    }

}



?>