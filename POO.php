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
    
    include("vehiculos.php");

    $mazda = new Coche();
    $campero = new Camion();

    echo "el numero de ruedas del coche es: " . $mazda->ruedas ."<br>";
    echo "el numero de ruedas del camion es:" . $campero->ruedas;
    $campero->frenar();
    $campero->establecer_color("amarrillo","t800");
    $campero->arrancar();
?>

</body>

</html>