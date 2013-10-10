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
        <title></title>
        <script>
            function alerta()
            {
                alert('Agrego este material a sus reservas, recuerde realizar las reservas pendientes dando click en el boton Reservas de la barra de herramientas ');

            }
        </script>
    </head>
    <body>
  
       <?php
        $indice=1;
       foreach ($resultadoFinal as $Re):
           
        $hei=500;
   
   echo ' <div  style="height:'.$hei.'px
       padding-left: 10px; padding-top:  19px;
    border-top: 2px dotted #ffffff;
     min-height:400px; background-color: #ffffff;" accept-charset="UTF-8">';
        
        echo '<ul class="result-list has-icons">';
            
           echo '<li class="result-list-li"><a class="record-index" name="1">'. $indice.' </a>';
                echo '<div class="result-list-record"><div class="record-icon pubtype">';
                       echo ' <span accept-charset="UTF-8" title=" '.$Re['tipo_material'].'">';
                       if($Re['tipo_material']=='Libro')
                       {
                          echo '<img src="../bootstrap/img/book.png"> </span>'; 
                       }
                       else
                           if($Re['tipo_material']=='CD-ROM')
                       {
                           echo '<img src="../bootstrap/img/cd.png"> </span>';
                       }
                           
                        else
                           if($Re['tipo_material']=='Folleto')
                       {
                           echo '<img src="../bootstrap/img/folleto.png"> </span>';
                       }
                       else
                           if($Re['tipo_material']=='Revista')
                       {
                           echo '<img src="../bootstrap/img/revista.png"> </span>';
                       }
                       else
                           if($Re['tipo_material']=='Video')
                       {
                           echo '<img src="../bootstrap/img/video.png"> </span>';
                       }
                      echo '  <p class="caption"><'.$Re['tipo_material'].'</p></div>';
                  echo '  <div class="divLibros"  style="position:absolute; left:250px;"><span class="title-link-wrapper">';
                         echo '   <a class="title-link color-p4" name="Result_1" id="Result_1" href="../Controller/PagPrincipalController.php?title='.$Re['titulo'].'&clasificacion='. $Re['codigo_clasificacion'].' "title="'. $Re['titulo'].'" accesskey="1"><strong>'. utf8_encode($Re['titulo']).'</strong> </a>';
                      echo '  </span> ';
                      //echo '  <center>';
                           echo ' <table border="2" width="25%" cellspacing="2" cellpadding="2" >';
                                                   
                                                  echo ' <tbody>';
                                                     echo '   <tr>';
                                                       echo '    <td>Titulo</td>';
                                                       echo '    <td NOWRAP>'. utf8_encode($Re['titulo']).'</td>';
                                                      echo '    </tr>';
                                                     echo '    <tr>';
                                                      echo '    <td>Autor</td>';
                                                      echo '    <td NOWRAP>'. utf8_encode($Re['autores']).'</td>';
                                                     echo '      </tr>';
                                                   echo '    <tr>';
                                                      echo '    <td>Publicación</td>';
                                                      echo '    <td NOWRAP>'.utf8_encode($Re['publicacion']).'</td></tr>';
                                                        echo '<tr><td>Materia</td><td NOWRAP>'.utf8_encode($Re['materia']).'</td></tr>';
                                                       echo ' <tr><td>Editorial</td><td NOWRAP>'.utf8_encode($Re['nombre_editorial']).'</td></tr>';
                                                      echo ' <tr><td>Tipo material</td><td>'.utf8_encode($Re['tipo_material']).'</td></tr>';
                                                   echo '</tbody>';
                                             echo '  </table>';
                     // echo '  </center>';
                        
                       echo '  <br><br>';
                        
                          ?>  
        <input type="submit" class="btn btn-inverse" name="eliminar" value ="Agregar a Reservas"  onclick="alerta()"/>
        <hr>
                          <?php  
                   echo ' </div>';
                    
                echo '</div>';
                
           echo ' </li>';
            
      echo '</ul>  ';
       echo ' </div>';
       $hei++;
    $indice++;
endforeach;

       ?> 


    </body>
</html>
