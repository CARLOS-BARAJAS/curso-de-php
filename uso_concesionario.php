<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    include("concensionario.php");

    Compra_vehiculo::$descuento =10000;// mopdificar un campo estatico fuera de una clase
    $compra_antonio = new Compra_vehiculo("compacto");
    $compra_antonio->catalizador();
    $compra_antonio->tapiceria_cuero("blanco");
    echo $compra_antonio->precio_final() . "<br>";
    $compra_ana = new Compra_vehiculo("compacto");
    $compra_ana->catalizador();
    $compra_ana->tapiceria_cuero("rojo");
    echo $compra_ana->precio_final();


?>
    
</body>
</html>