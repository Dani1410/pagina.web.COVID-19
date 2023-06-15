<?php 

// inicia una sesion 

    session_start();

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Valida el usuario

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena' ");

    // Si si hay sesion los lleva a la pagina principal

    if(mysqli_num_rows($validar_login) > 0){

        $row = mysqli_fetch_assoc($validar_login);
        $tipo_usuario = $row['tipo'];

        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipo_usuario;
            
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