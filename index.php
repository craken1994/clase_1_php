<?php

    //********************************Ejercicios con operadores aritméticos
    echo "<h1>EJERCICIOS CON OPERADORES ARITMÉTICOS</h1>";
    
    $num1 = 7;
    $num2 = 5;

    
    $suma              = $num1 + $num2;    
    $resta             = $num1 - $num2;    
    $multiplicacion    = $num1 * $num2;    
    $division          = $num1 / $num2;    
    $modulo            = $num1 % $num2;    
    $potenciacion      = $num1 ** $num2; 
    
    echo "Suma: " . $suma;                        echo "<br>";
    echo "Resta: " . $resta;                      echo "<br>";
    echo "Multiplicación: " . $multiplicacion;    echo "<br>";
    echo "Division: " . $division;                echo "<br>";
    echo "Modulo: " . $modulo;                    echo "<br>";
    echo "Potenciación: " . $potenciacion;        echo "<br>";

    echo "<hr>"; //agregando línea separadora

    //*********************************Ejercicios con oncatenación

    echo "<h1>EJERCICIO DE CONCATENACIÓN</h1>";
    $nombre = "Pedro";
    $apellido_pat = "Marquez";
    $apellido_mat = "Avalos";

    $nombres_completos = $nombre . " " . $apellido_pat . " " .  $apellido_mat;
    echo $nombres_completos;

    echo "<hr>"; //agregando línea separadora

?>