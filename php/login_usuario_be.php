<?php

// inicia una sesion 

session_start();

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Valida el usuario

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena' ");

// Si si hay sesion los lleva a la pagina principal

if (mysqli_num_rows($validar_login) > 0) {

    $row = mysqli_fetch_assoc($validar_login);
    $tipo_usuario = $row['tipo'];
    $nombre_completo = $row['nombre_completo'];
    $primer_nombre = substr($nombre_completo, 0, strpos($nombre_completo, " "));

    $_SESSION['usuario'] = $usuario;
    $_SESSION['tipo'] = $tipo_usuario;
    $_SESSION['nombre_completo'] = $nombre_completo;
    $_SESSION['primer_nombre'] = $primer_nombre;

    header("Location: ../index.php");
    exit;
}

// Si no nos dice que no existe y nos regresa a el login

else {
    echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../login.php";
            </script>
        ';
    exit;
}
