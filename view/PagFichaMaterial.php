<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link type="text/css" href="../bootstrap/css/result.css" rel="stylesheet" media="screen">
        <script>
            function alerta()
            {
                alert('Agrego este material a sus reservas, recuerde realizar las reservas pendientes dando click en el boton Reservas de la barra de herramientas ');

            }
        </script>

    </head>
    <body>



        <div class="fichaM">


            <ul class="result-list ">



                <li class="result-list-li">
                <center>
                    <h1>Ficha del material</h1>
                </center>
                <div class="iconLIbro">
                    <span  title="Publicación académica">
                        <img src="../bootstrap/img/book.png"> 
                    </span>
                    <p class="caption">libro</p>
                </div>



                <div class="tablaFicha">


                    <center>
                        <?php
                        foreach ($fichD as $fic):
                            echo '<span class="fichTutulo" ><strong>' . utf8_encode($fic['titulo']) . '</strong></a></span><br><br> <br><br>';
                            echo '<table border="2" width="25%" cellspacing="2" cellpadding="2" >';

                            echo '<tbody>';
                            echo '<tr><td  NOWRAP>Codigo de clasificacion: </td><td NOWRAP>' . utf8_encode($fic['codigo_clasificacion']) . '</td></tr>';
                            echo '<tr><td>Titulo: </td><td NOWRAP>' . utf8_encode($fic['titulo']) . '</td></tr>';
                            echo '<tr><td>Autor (es): </td><td NOWRAP>' . utf8_encode($fic['autores']) . '</td></tr>';
                            echo '<tr><td>Publicación: </td><td NOWRAP>' . utf8_encode($fic['publicacion']) . '</td> </tr>';
                            echo ' <tr> <td>Materia: </td> <td NOWRAP>' . utf8_encode($fic['materia']) . '</td> </tr>';
                            echo ' <tr> <td>Editorial: </td> <td NOWRAP>' . utf8_encode($fic['nombre_editorial']) . '</td> </tr>';
                            echo '<tr> <td NOWRAP>Tipo material:    </td>  <td NOWRAP>' . utf8_encode($fic['tipo_material']) . '</td> </tr>';
                            echo '<tr> <td NOWRAP>Clase material:    </td>  <td NOWRAP>' . utf8_encode($fic['clase_material']) . '</td> </tr>';
                            echo '</tbody>';
                            echo ' </table>';


                        endforeach;
                        ?>

                        <br><br>

                        <input type="submit" class="btn btn-inverse" name="eliminar" value ="Agregar a Reservas"  onclick="alerta()"/>


                    </center>


                </div>

                </li>		
            </ul>

        </div>


    </body>
</html>
