<?php
require_once("../clases/class.php");
$obj = new Trabajo();
?>
<link href="../bootstrap/css/bootstrapotro.css" rel="stylesheet">
<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>


<div id="tabla">

    <?php $obj->carro(); ?>
    <?php
    if (!empty($_SESSION["carro"])) {

        $totalcoste = 0;
        $Total = 0;
        ?>


        <table border="0">
            <tr>
                <th>Material reservado</th>
            </tr>
            <?php
            $id = '';
            $producto = '';
            $precio = '';
            foreach ($_SESSION["carro"] as $key => $valor) {
                $fi = $obj->getProductosPorId($key);
                foreach ($fi as $fila) {
                    $id = $fila["id_material"];
                    $producto = $fila["titulo"];
                    $precio = $fila["codigo_clasificacion"];
                }
                ?>

                <tr>
                    <td NOWRAP><?php echo $producto; ?></td>

                    <td>

                    <td><a href="?id=<?php echo $id ?>&action=removeProd" class="btn"><i class="icon-trash"></i> </a></td>
                    </td>


                </tr>


            <?php } ?>
            <tr>
                <td>
                    <?php
                    if ((!empty($_SESSION["usuarioactual"]))) {
                        foreach ($_SESSION['carro'] as $idM):

                        endforeach;

                        $mi_pasa_array = $_SESSION['carro'];
                        $compactada = serialize($mi_pasa_array);

                        $compactada = urlencode($compactada);
                        ?>

                        <a style="width: 100%" data-toggle="modal" href="#myModal"  class="btn btn-primary btn-inverse"  id="login"  href="ReservaC.php?doc=<?php echo $_SESSION["documentoUser"] ?>&material=<?php echo $compactada ?>" >
                            Realizar Reservas</a>



                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Reservas</h4>
                                    </div>
                                    <form method="post" name="formuUsuario" class="login" > 
                                        <div class="modal-body">
                                            <p>
                                                Ser realizo su reserva con exito!!

                                            </p>
                                        </div>

                                        <div class="modal-footer">

                                            <?php
                                            foreach ($_SESSION["carro"] as $key => $valor) {
                                                $fi = $obj->getProductosPorId($key);
                                                foreach ($fi as $fila) {
                                                    $id = $fila["id_material"];
                                                    $producto = $fila["titulo"];
                                                    $precio = $fila["codigo_clasificacion"];
                                                }

                                                echo $producto;
                                                echo '<hr>';
                                            }
                                            ?> 

                                        </div>
                                        <div class="modal-footer">
                                            <a  class="btn btn-primary btn-inverse"  id="login"  href="ReservaC.php?doc=<?php echo $_SESSION["documentoUser"] ?>&material=<?php echo $compactada ?>" >
                                                Aceptar</a> 
                                        </div>

                                    </form> 
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php
                    } else {
                        ?>

                        <a style="width: 100%" data-toggle="modal" href="#myModal" class="btn btn-primary btn-inverse">Realizar reserva</a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Acceder</h4>
                                    </div>
                                    <form method="post" name="formuReser"> 
                                        <div class="modal-body">


                                            <input style="margin-bottom: 15px;"  type="text" placeholder="ingrese su documento" id="documento" name="documento"><br> 
                                            <input style="margin-bottom: 15px;" type="text"  placeholder="Ingrese correo electronico" id="correo" name="correo"><br>
                                        </div>

                                        <div class="modal-footer">
                                            <button  type="button" onClick="enviReserva()" class="btn btn-inverse" >Ingresar</button><br><br>
                                        </div>
                                    </form> 
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->


                        <?php
                    }
                    ?>

                </td>
            </tr>
        </table>
    </div>

    <?php
} else {
    echo 'Aun No tiene reservas';
    ;
}
?>
