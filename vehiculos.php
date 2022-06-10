<?php

class Coche
{
    public $ruedas;
    public $color;
    public $motor;
    function __construct()
    { // metodo constructor de la clase en php
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    function  arrancar()
    {
        echo "estoy arrando perros <br>";
    }
    function girar()
    {
        echo "estoy girando perros <br>";
    }
    function frenar()
    {
        echo "estoy frenando no me pueden detener <br>";
    }
    function establecer_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "el color del coche es " . $this->color . " y la marca es :" . $nombre_coche;
    }
}

$manzda = new Coche();
$renault = new Coche();
$seat = new Coche();

//$manzda->establecer_color("rojo", "renault")

//$manzda->girar();
//$seat->frenar();
//echo $renault->ruedas;
//echo "<br>" . $manzda->motor;
?>



<?php

class Camion extends Coche
{

    function __construct()
    { // metodo constructor de la clase en php
        $this->ruedas = 8;
        $this->color = "";
        $this->motor = 2600;
    }
    function establecer_color($color_camion, $nombre_camion)
    {
        $this->color = $color_camion;
        echo "el color del camion es " . $this->color . " y la marca es :" . $nombre_camion;
    }
    function arrancar()
    {
        parent::arrancar();
        echo "arrancar camion o esperar que prenda";
    }
}
?>