<?php

if (isset($_POST["guardar_op"])) {

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calculadora($operacion);
}



function calculadora($calcular)
{
    if (!strcmp("Suma", $calcular)) {
        global $numero1;
        global $numero2;
        echo "el resultador es: " . ($numero1 + $numero2);
    } elseif (!strcmp("Resta", $calcular)) {
        global $numero1;
        global $numero2;
        echo "el resultador es: " . ($numero1 - $numero2);
    } elseif (!strcmp("Multiplicacion", $calcular)) {
        global $numero1;
        global $numero2;
        echo "el resultador es: " . ($numero1 * $numero2);
    } elseif (!strcmp("Division", $calcular)) {
        global $numero1;
        global $numero2;
        echo "el resultador es: " . ($numero1 / $numero2);
    } else {
        echo "error digite otra ves los valores";
    }
}
