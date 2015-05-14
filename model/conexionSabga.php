<?php

class conexionSabga {

    public function conectarse() {

        $link = mysqli_connect("localhost", "root", "", "sabgab");

        /* verificar la conexion */
        if (mysqli_connect_errno()) {
            echo "se encontro un error de conexión: " . mysqli_connect_error();
            exit();
        }

        return $link;
    }

}
