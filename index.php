<!DOCTYPE html>
<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <div><?php if(isset($_SESSION['USR'])){ ?>
            <a href="cerrar.php">Cerrar sesion</a>
        <?php } ?>
        </div>        
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n </a>
        <?php if(!isset($_SESSION['USR'])){ ?>
        <form action="revision.php" method="POST">
            <div><label>Usuario</label><input type ="text" name ="nombre"</div>
            <div><label>Clave</label><input type ="password" name ="clave"</div>
            <input type ="submit" value="Acceder">
        </form>
        
        
    </body>
</html>


