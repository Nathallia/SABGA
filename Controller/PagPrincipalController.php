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

include_once '../view/PagPrincipal.php';
?>