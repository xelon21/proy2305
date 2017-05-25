<?php

class Logtransacciones{
    var $idacceso;
    var $nomtabla;
    var $accion;
    var $descripcion;
    
    public function __construct1($idacceso="", $nomtabla="", $acccion="", $descripcion) {
        $this->idacceso = $idacceso;
        $this->nomtabla = $nomtabla;
        $this->accion = $acccion;
        $this->descripcion = $descripcion;
    }
}
