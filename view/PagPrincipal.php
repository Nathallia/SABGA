<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;  AddCharset UTF-8 .php">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/normalize.css" rel="stylesheet" media="screen">
        <link type="text/css" href="../bootstrap/css/CSSsabgab.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="../bootstrap/js/funciones.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionDatosUsuario.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionFicha.js" language="JavaScript"></script>
        <script src="../bootstrap/js/funcionBuscar.js" language="JavaScript"></script>
        <title>Sabga Reserva.</title>

    </head>
    <body>
        <script>

        </script>
        <style>
            ul.nav li.dropdown:hover > ul.dropdown-menu {
                display: block;    
            }
        </style>

        <div class="navbar navbar-inverse nav">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="divider-vertical"></li>
                            <li><a href="../Controller/PagPrincipalController.php"><i class="icon-home icon-white"></i> Inicio</a></li>
                        </ul>
                        <div class="pull-right">
                            <ul class="nav pull-right ">
                                <li class="dropdown "><a href="#" class="dropdown-toggle " data-toggle="dropdown">Login<b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">

                                        <?php
                                        
                                        If(isset($loginn))
                                        echo $loginn;
                                        else
                                            echo 'nada';
                                        ?>
                                       
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservas <b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                                        <form method="post" action="login" accept-charset="UTF-8">
                                            <table class="table table-condensed table-hover">
                                                <thead>

                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><a href="#" class="btn"><i class="icon-trash"></i> </a></td>
                                                        <td><strong>contraveneno</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#" class="btn"><i class="icon-trash"></i> </a></td>
                                                        <td><strong>Calculo 2</strong></td>
                                                    </tr>

                                                </tbody>
                                            </table>		
                                            <input class="btn btn-primary btn-inverse" type="button" id="login" value="Realizar Reservas">
                                        </form>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda <b class="caret"></b></a>

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div >

            <div class="texto">
                <img src="../bootstrap/img/Logo Biblioteca.png" class="logo">

                <img src="../bootstrap/img/Sin título-3.png" class="imagen">  



                <div class="text"> 
                    <h2>Institucion Educativa Gilberto Alzate Avendaño</h2>
                    <h1 style="text-align: center">SABGA</h1>
                </div>

            </div>






            <div class="cont">

                <div class="buscar">
                    <h3>Busqueda de material</h3>
                    <center><h3>Bibliotecario</h3></center>
                </div>
                <div class="Busqueda">


                    <form  method="post" action="" name="formulario">

                        <input id="busque"  name="campoText" type="text" class="input-medium search-query" placeholder="Ingrese su busqueda" >
                        <button type="button" onClick="buscarMa()" class="btn btn-inverse" >Buscar</button><br><br>

                        <br>


                        <table class="table table-condensed table-hover">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="check"> </td>
                                    <td><strong>Todos los campos</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="check"></td>
                                    <td><strong>Autor</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="check"></td>
                                    <td><strong>Titulo</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="check"></td>
                                    <td><strong>Materia</strong></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="check"></td>
                                    <td><strong>Codigo</strong></td>
                                </tr>
                            </tbody>
                        </table>

                    </form>




                </div>

            </div>




            <div class="contenidoF" id="contenidoF" accept-charset="UTF-8" >

                <div class="pagination pagination-centered">
                    <ul>
<?php
for ($i = 65; $i <= 90; $i++) {
    $letra = chr($i);
    echo ' <li ><a href="../Controller/PagPrincipalController.php?letra=' . $letra . '">' . $letra . '</a></li>';
}
?>

                    </ul>
                </div>



<?php
if (isset($_GET['title'])) {
    header('Content-Type: text/html; charset=UTF-8');
    include_once'../Controller/PagFichaMaterialController.php';
} else
if (!(isset($_GET['title']))) {
    ?>
                    <div  class="resulBarra">
                        <div class="plan">


                            <div class="plan-name-silver">
                                <center>
    <?php
    header('Content-Type: text/html; charset=UTF-8');

    echo '<h2>' . $let . ' </h2>';
    ?> 
                                </center>

                            </div>
                            <div class="tablaBarra">
    <?php
    require_once '../model/ModeloSabga.php';

    echo '<br>';
    $obj = new ModeloSabga();

    $res = $obj->BarraDeletra($let);

    foreach ($res as $re):
        $codigoL = $re['codigo_clasificacion'];
        ?>
                                    <form name="forFicha" method="post">
                                        <table aling="right" ><tr>
                                            <a  href="../Controller/PagPrincipalController.php?title=<?php echo $re['titulo'] ?>&clasificacion=<?php echo $re['codigo_clasificacion'] ?>"  
                                                onclick=""  title="Resultado"> <?php echo utf8_encode($re['titulo']) ?></a> 
                                            </tr></table>

        <?php
        echo '<br>';
    endforeach;
    ?>
                                    <!--<a href="#" onclick="javascript:document.form1.submit()" title="Abre el enlace">Enlace</a> -->

                                </form>

                            </div>

                        </div>
                    </div>
    <?php
}
?>
            </div>

        </div> 



    </body>
</html>