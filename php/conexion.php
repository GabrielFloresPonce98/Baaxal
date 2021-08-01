<?php 
//Conexion a la base de datos!
$con = new mysqli("fdb22.atspace.me",//HOST
                "3855564_baaxal",//Usuario
                ",h}gtDaj5?EIzk59",//Contrasenia
                "3855564_baaxal");//Base de datos
        if($con->connect_error){
            die("error en la conexion".$con->conect_error);
        }

?>