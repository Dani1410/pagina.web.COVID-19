<?php

$user = "localhost";
$nombre_usuario = "root";
$password = "";
$nombre_bd = "blog_db";

$conexion = mysqli_connect($user, $nombre_usuario, $password, $nombre_bd);

$id = $_POST['txt-id'];

mysqli_query($conexion, "DELETE FROM usuarios WHERE id_usuario = $id") or die("Error al eliminar");
mysqli_close($conexion);
header("location: ./leer.php");

?>