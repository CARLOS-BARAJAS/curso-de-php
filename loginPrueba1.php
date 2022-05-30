<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    if(isset($_POST["guardar"])){ //iseet para comprobar si el boton fue seleccionado

        $nombre = $_POST["txtNombre"];
        $edad = $_POST["txtEdad"];
        if($nombre == "carlos"){
            echo "Puedes entrar";
        }else{
            echo "no puedes entrar";
        }

    }

?>
<body>
    
    <form action="loginPrueba1.php" method="POST">
    <div>
    <p>Nombre</p>
    <input type="text" name="txtNombre" id="txtNombre">
    <p>Edad</p>
    <input type="text" name="txtEdad" id="txtEdad">
    <br>
    <br>
    <button type="submit" name="guardar" id="guardar">Guardar</button>
    </div>
    </form>
    
</body>
</html>