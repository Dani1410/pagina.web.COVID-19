<?php

$user = "localhost";
$nombre_usuario = "root";
$password = "";
$nombre_bd = "blog_db";

$conexion = mysqli_connect($user, $nombre_usuario, $password, $nombre_bd);

// ___________________________________________________________________________

$nombre_completo = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$tipo_usuario = $_POST['tipo-usuario'];

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, tipo) VALUES ('$nombre', '$correo', '$usuario', '$contrasena', '$tipo_usuario')";


//Verificar si el dato no se repite en la db
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
            <script> 
                alert("Este correo ya fue registrado, intenta con otro diferente");
                window.location = "../registrar.html";
            </script>
        ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
            <script> 
                alert("Este usuario ya fue registrado, intenta con otro diferente");
                window.location = "../registrar.html";
            </script>
        ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
            <script> 
                alert("Usuario Registrado");
                window.location = "../registrar.html";
            </script>
        ';
} else {
    echo '
            <script> 
                alert("Intentelo de nuevo, usuario no registrado");
                window.location = "../registrar.html";
            </script> 
        ';
}

mysqli_close($conexion);
?>