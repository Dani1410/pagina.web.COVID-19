<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="./css/leer.css">
    <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.min.css">

</head>

<body>
    <header id="header">
        <a href="../index.php" class="logo">Regresar</a>
    </header>
    <div class="espacio-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $user = "localhost";
                $nombre_usuario = "root";
                $password = "";
                $nombre_bd = "blog_db";

                $conexion = mysqli_connect($user, $nombre_usuario, $password, $nombre_bd);

                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {

                ?>


                    <tr>
                        <th><?php echo $mostrar['id_usuario']; ?></th>
                        <td><?php echo $mostrar['nombre_completo']; ?></td>
                        <td><?php echo $mostrar['correo']; ?></td>
                        <td><?php echo $mostrar['usuario']; ?></td>
                        <td><?php echo $mostrar['contrasena']; ?></td>
                        <td><?php echo $mostrar['tipo']; ?></td>
                        <td>
                            <!-- Eliminar -->
                            <form action="php/eliminar.php" method="POST">
                                <input type="hidden" value="<?php echo $mostrar['id_usuario']; ?>" name="txt-id" readonly>
                        <td><input type="submit" value="Eliminar" name="btnEliminar"></td>
                        </form>
                        </td>
                        <td>
                            <!-- Editar -->
                            <a href="php/editar.php?id=<?php echo $mostrar['id_usuario']; ?>">Editar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>