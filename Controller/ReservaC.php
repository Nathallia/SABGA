<?php

session_start();
/**
 * Description of ReservaC
 *
 * @author natalia ladino
 */
if (isset($_GET['material']) && isset($_GET['doc'])) {

    $a = stripslashes($_GET['material']);

    $mi_array = unserialize($a);

    $documentoUser = $_GET['doc'];
    $fechaR = date("Y-m-d");
    require '../model/conexionSabga.php';
    $conex = new conexionSabga();
    $link = $conex->conectarse();


    $mySQl = "call InsertarReserva($documentoUser,'" . $fechaR . "',1)";
    if (mysqli_query($link, $mySQl)) {

        foreach ($mi_array AS $clave => $valor):
            mysqli_query($link, "call DetalleReserva($clave,$documentoUser,'" . $fechaR . "')");
        endforeach;
    } else {
        echo '-->No';
    }
    mysqli_close($link);
    $docuR = $_SESSION["documentoUser"];
    $correR = $_SESSION["correoUser"];
    
   
  
        unset($_SESSION["carro"]);
        include './PagPrincipalController.php';
//include_once './PagUsuarioController.php?doc='.$_SESSION["documentoUser"].' &corre='.$_SESSION["correoUser"].'';
} else {
    echo 'vacio carrito';
}



