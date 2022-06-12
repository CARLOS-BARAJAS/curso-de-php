<?php

class Compra_vehiculo
{
    static $descuento = 4500;
    private $precio_base;
    function __construct($gama)
    {
        if ($gama == "urbano") {
            $this->precio_base = 10000;
        } elseif ($gama == "compacto") {
            $this->precio_base = 20000;
        } elseif ($gama == "berlina") {
            $this->precio_base = 30000;
        }
    }/// fin del constructor
    function catalizador(){

        $this->precio_base +=2000;
    }
    function navegador_gps(){
        $this->precio_base +=2500;
    }
    function tapiceria_cuero($color){
        if($color == "blanco"){
            $this->precio_base +=3000;
        }elseif($color == "beige"){
            $this->precio_base +=3500;
        }else{
            $this->precio_base +=5000;
            
        }
    }
    function precio_final(){
        $valor_final = $this->precio_base - self::$descuento;
        return $valor_final;
    }

}
