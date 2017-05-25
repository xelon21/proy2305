<?php
class Usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    /*vlida la existencia del usuario*/
    function VerificaUsuario(){
        $oConn=new Conexion();
        
        
        if ($oConn->conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre'";
        
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1)
            return true;
        else
            return false;
        
        
    }
    
    function VerificaUsuarioClave(){
        $oConn=new Conexion();
        
        
        if ($oConn->conectar())
            $db=$oConn->objconn;
        else
            return false;
        $clavemd5=md5($this->clave);
        $sql="SELECT * FROM acceso WHERE nomusuario='$this->nombre' and pwusuario='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1)
            return true;
        else
            return false;
}
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
