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

    function incrementalVariable(){

        static $contador = 0; //static su funcion es conservar el valor de la variable al momento de ejecutar la funcion
        $contador ++;

        echo $contador . "<br>";

    }

    incrementalVariable();
    incrementalVariable();



?>

</body>
</html>