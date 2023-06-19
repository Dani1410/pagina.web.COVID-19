<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="./css/leer.css">
    <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        #header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .logo {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }

        .espacio-formulario {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .success-message {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header id="header">
        <a href="../leer.php" class="logo">Regresar</a>
    </header>
    <div class="espacio-formulario">
        <h1>Editar Usuario</h1>
        <?php
        // Conexión a la base de datos
        include '../php/conexion.php';

        // Obtener el ID del usuario a editar
        $idUsuario = $_GET['id'];

        // Consulta para obtener los datos del usuario
        $sql = "SELECT * FROM usuarios WHERE id_usuario = '$idUsuario'";
        $result = mysqli_query($conexion, $sql);
        $usuario = mysqli_fetch_assoc($result);

        if (!$usuario) {
            echo "Usuario no encontrado.";
        } else {
            // Actualizar el usuario en la base de datos
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombreCompleto = $_POST['nombre_completo'];
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];
                $tipo = $_POST['tipo'];

                $sql = "UPDATE usuarios SET nombre_completo = '$nombreCompleto', correo = '$correo', usuario = '$usuario', contrasena = '$contrasena', tipo = '$tipo' WHERE id_usuario = '$idUsuario'";

                if (mysqli_query($conexion, $sql)) {
                    echo "<script>alert('Registro editado.'); window.location = '../leer.php';</script>";
                    exit();
                } else {
                    echo "Error al actualizar el usuario: " . mysqli_error($conexion);
                }
            }
        ?>
            <form action="" method="POST">
                <label for="nombre_completo">Nombre completo:</label>
                <input type="text" name="nombre_completo" value="<?php echo $usuario['nombre_completo']; ?>" required>

                <label for="correo">Correo:</label>
                <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required>

                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" value="<?php echo $usuario['usuario']; ?>" required>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" value="<?php echo $usuario['contrasena']; ?>" required>

                <label for="tipo">Tipo:</label>
                <select name="tipo" required>
                    <option value="admin" <?php if ($usuario['tipo'] == 'admin') echo 'selected'; ?>>Administrador</option>
                    <option value="usuario" <?php if ($usuario['tipo'] == 'usuario') echo 'selected'; ?>>Usuario</option>
                </select>

                <input type="submit" value="Guardar cambios">
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>