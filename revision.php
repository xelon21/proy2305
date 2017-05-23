<?php
session_start();
$PATH='lib/';
include $PATH.'conexion.php';
include $PATH.'usuario.php';
$oUsr=new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['clave'];
if($oUsr->VerificaUsuarioClave())
        $_SESSION['USR']=$oUsr;
header('Location:http://localhost/proy1805/');
?>

