<?php



        if (isset($_POST['documento']) && isset($_POST['correo'])) {
            
        } else {
            echo 'no hay nada';
        }

        require_once '../model/ModeloSabga.php';
       
        $doc = $_POST['documento'];
        $corr = $_POST['correo'];
        $claUs=new ModeloSabga();
        $nuevo =$claUs->DatosUsuario($doc, $corr);
        
        
        
     $Dreserva=$claUs->Reserva($_POST['documento']);
         if($Dreserva !=null)
         {
             $mensaje='';
         }
         else
         {
             $mensaje='Aun no tiene historial de reservas';
         }
        if ($nuevo != null) {
        
     include '../view/PagUsuario.php';
            
        } else {
      
            include '../view/paginaError.php'; 
        }
        
