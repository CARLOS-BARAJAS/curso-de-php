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

    $nombre = "carlos";

    function dameNombre()
    {
        global $nombre; // cuando la variable se declara global permite modificar el valor de la varaible fuera de la funcion
        $nombre = "maria";
    }
    dameNombre();

    echo $nombre;
    ?>


</body>

</html>