<?php 

    $user = "localhost";
    $nombre_usuario = "root";
    $password = "";
    $nombre_bd = "blog_db";

    $conexion = mysqli_connect($user, $nombre_usuario, $password, $nombre_bd);

    /*if($conexion){
        echo 'Coneccion a la B.D exitosa';
    } else {
        echo 'Conexion erronea';
    }*/


?>