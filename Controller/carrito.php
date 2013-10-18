<?php

 require_once("../clases/class.php");
 $obj=new Trabajo();

?>

 <div id="tabla">

                                 <?php $obj->carro(); ?>
                                  <?php
                                   if (!empty($_SESSION["carro"])) {

                                        $totalcoste=0;
                                        $Total=0;
                                  ?>


                                  <table border="0">
                                      <tr>
                                          <th>Material</th>
                                          <th>  </th>
                                           </tr>

                                    <?php
                                    $id='';
                                    $producto='';
                                    $precio='';
                                         foreach ($_SESSION["carro"] as $key=>$valor) {
                                             $fi=$obj->getProductosPorId($key);
                                              foreach($fi as $fila){
                                                   $id=$fila["id_material"];
                                                   $producto=$fila["titulo"];
                                                   $precio=$fila["codigo_clasificacion"];
                                              }

                                             
                                    ?>

                                      <tr>
                                          <td><?php echo $producto; ?></td>
                                        
                                           <td>
                                  
                              <td><a href="?id=<?php echo $id ?>&action=removeProd" class="btn"><i class="icon-trash"></i> </a></td>
                                           </td>
                             
                                         
                                       </tr>
                                       

                                     <?php } ?>

                                    </table>
                              </div>
                             
                         <?php
                            }
                            else
                            {
                                echo 'Aun No tiene reservas';;   
                            }
                             
                         ?>
