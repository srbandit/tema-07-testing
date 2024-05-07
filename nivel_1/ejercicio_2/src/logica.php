<?php
require_once 'Grades.php';
require_once 'index.php';


function calcularGrado($nota)
{   
    
    $resultado = match (true) {
        $nota > 3.3 && $nota < 4.4 => "El grado es tercera división",
        $nota >= 4.5 && $nota <= 5.9 => "El grado es segunda división",
        $nota >= 6.0 => "El grado es primera división",
        default => "El alumno está reprobado"
    };
    return $resultado;
}
