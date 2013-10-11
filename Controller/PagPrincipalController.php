<?php
require '../clases/classLetras.php';
        $let='A';
if(!(isset($_GET['letra'])))
{
   $let='A';
}
else
{
$obLet=new classLetras();

$let=$obLet->hallarLetra($_GET['letra']);
}

$loginn='vacio';

        if (!empty($_SESSION["usuarioactual"]))
            $loginn= '<a href="../Controller/salirSesion.php" title="Cerrar sesión">cerrar sesion</a>"' . 'bienvenido-->' . $_SESSION["usuarioactual"] . '';
        else
           $loginn='<div id="loginDiv"><form method="post" name="formuUsuario" class="login" > <input style="margin-bottom: 15px;" type="number" placeholder="ingrese su documento" id="documento" name="documento"><br> <input style="margin-bottom: 15px;" type="text" placeholder="Ingrese correo" id="correo" name="correo"><br> <button name="login"  type="button" onClick="datosUsuarioLogin()" class="btn btn-inverse" >Ingresar</button><br><br> </form>  </div>';

        
include_once '../view/PagPrincipal.php';
?>