<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
require '../Controller/seguridad.php';
$segur = new seguridadUsuario();
$segur->seguriUser();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap-tab.js"></script>

        <title>SABGA</title>
    </head>
    <body>
        <hr>
        <div id="loginSesion">
            <h1>Bienvenido al sistema!</h1>
        <h2>Usuario: <?php echo $_SESSION["usuarioactual"] ?> </h2><br>
        <p>Entro correctamente al sistema.</p><br><br>
        <a href="../Controller/salirSesion.php">Salir</a>
        </div>
    <center><h3>Ficha Del Usuario</h3></center> 



    <div class="modal-body">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#histo" data-toggle="tab">Historial</a></li>
                <li><a href="#dato" data-toggle="tab">Datos personales</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">


                <div class="tab-pane active in" id="histo">
                    <form class="form-horizontal" action='' method="POST">
                        <p class="lead">Historial de reservas</p>


                        <div class="row">
                            <div class="span6">
                                <table>
                                    <?php
                                    foreach ($nuevo as $otras):
                                        ?>  
                                        <tr><td>Nombre:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otras['nombre'] ?>"/></td></tr>
                                        <tr><td>Documento:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otras['documento_usuario'] ?>"/></td></tr>
                                        <?php
                                    endforeach;
                                    ?> 
                                </table><br>
                                <h5><?php echo $mensaje; ?></h5>

                                <table class="table table-condensed table-hover"  width="100%" cellpading="20" cellspacing="20">
                                    <thead>

                                        <tr>
                                            <th>Codigo Material</th>
                                            <th>Fecha actual</th>
                                            <th>Fecha reserva</th>
                                            <th>Estado reserva</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($Dreserva as $reservasU): ?>
                                            <tr>

                                                <td><?php echo $reservasU['codigo_clasificacion'] ?></td>
                                                <td><?php echo date("d-m-Y"); ?></td>
                                                <td><?php echo $reservasU['fecha_reserva'] ?></td>
                                                <td><?php
                                                    if ($reservasU['estado_reserva'] == 1) {
                                                        echo 'Vigente';
                                                    } else {
                                                        echo 'Cancelada';
                                                    }
                                                    ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>




                            </div>

                        </div> 



                    </form>                
                </div>
                <div class="tab-pane fade" id="dato">
                    <form id="tab">


                        <br>
                        <p class="lead">Información personal</p>
                        <center>
                            <p>Recuerde que para modificar sus datos debe dirijirse a su biblioteca.</p>
                            <div class="span6 ">


                                <table  >
                                    <?php
                                    foreach ($nuevo as $otraposts):
                                        ?>  
                                        <tr><td>Nombre:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['nombre'] ?>"/></td></tr>
                                        <tr><td>Documento:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['documento_usuario'] ?>"/></td></tr>
                                        <tr><td>Correo:</td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['correo'] ?>"/></td></tr>
                                        <tr><td>Telefono: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['telefono'] ?>"/></td></tr>
                                        <tr><td>Direccion:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['direccion'] ?>"/></td></tr>



                                    </table> 
                                </div> 
                                <div class="span6">
                                    <table>

                                        <tr><td>Grado: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['grado'] ?>"/></td></tr>
                                        <tr><td>Curso: </td> <td><input type="text" name="nombre" value="" disabled="disabled" value="nombre" placeholder="<?php echo $otraposts['curso'] ?>"/></td></tr>
                                        <tr><td>Jornada: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['jornada'] ?>"/></td></tr>
                                        <tr><td>Tipo de  usuario: </td> <td><input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['tipo_usuario'] ?>"/></td></tr>
                                        <tr><td>Estado de usuario:</td> <td> <input type="text" name="nombre" value="" disabled="disabled" placeholder="<?php echo $otraposts['estado_usuario'] ?>"/></td></tr>

                                        <tr>
                                    </table> 
                                    <?php
                                endforeach;
                                ?> 
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

