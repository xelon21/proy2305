<?php
class Producto {
    var $nombre="";
    var $precio=0;
    public $codigo="";
    
    /*Constructor de la clase*/
    
    public function __construct1($nombre="", $precio=0, $codigo="") {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->codigo = $codigo;
    }
    public function totalUSD(){
        return $this->precio/680;
    }
}
