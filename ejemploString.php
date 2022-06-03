<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .resalta{
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<?php

        echo "<p class='resalta'>Esto es un ejemplo de frase</p>";

        $variable1 = "Casa";
        $variable2 = "CASA";

        $resultado=strcmp($variable1, $variable2); // devuelve 1 si no son iguales y 0 si son iguales
        echo $resultado . " no son iguales <br>";

        $resultado=strcasecmp($variable1, $variable2); // devuelve 1 si son iguales y 0 si no son iguales
        echo $resultado . " si son iguales <br>";

        if($resultado){ //! lo contraloria que necesita si resultado no es verdadero 

            echo "no coenciden";
        }else{
            echo "si coenciden";
        }
        

?>

</body>
</html>