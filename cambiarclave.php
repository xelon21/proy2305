<?php
include("constantes.php");
include("librerias.php");
?>

<?php
$nomuuario=$_POST['nomusuario'];
$passAntigua=$_POST['passAntigua'];
$passNueva=$_POST['passNueva'];
$passConfirma=$_POST['passConfirma'];

if($passNueva!=$passConfirma){
    echo "las claves no son iguales";
    return;
}
$oUser=new Usuario();
$oUser



?>