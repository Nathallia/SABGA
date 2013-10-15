<?php

 

/**
 * Description of ReservaC
 *
 * @author natalia ladino
 */
class ReservaC {
   
    public $arrayReserva;
    public function insertar($dato)
    {
        $this->arrayReserva=array();
    for($i; $i<  $this->arrayReserva;$i++)
    {
        $this->arrayReserva[$i]=$dato;
    }
        
    }
    
    public function MostrarRe()
    {
        foreach ($this->arrayReserva as $nuevo):
            echo $nuevo;
        endforeach;
    }
}
