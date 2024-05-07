<?php

class Grades {
    private int $grade = 6;

    public function __construct()
    {
        
    }

    public function verNota(){
        return $this->grade * 10;
    }

}



?>