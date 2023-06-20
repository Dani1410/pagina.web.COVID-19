<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer</title>
    <link rel="stylesheet" href="./css/leer.css">
    <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.min.css">

    <style>
        /* Hover styles for table rows */
        tr:hover {
            background-color: #f5f5f5;
        }

        /* Styling for the "Regresar" link */
        .logo {
            color: #333;
            font-weight: bold;
            text-decoration: none;
            font-size: 20px;
        }

        .logo:hover {
            text-decoration: underline;
        }

        /* Styling for the table */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            /* Center the table horizontally */
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        /* Styling for the "Eliminar" button */
        input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

        /* Styling for the "Editar" link */
        .edit-link {
            color: #007bff;
            text-decoration: none;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        /* Styling for the header */
        #header {
            background-color: #f8f9fa;
            padding: 10px;
        }

        /* Styling for the main container */
        .espacio-tabla {
            margin-top: 20px;
        }

        /* Styling for the table container */
        .table-container {
            max-width: 800px;
            margin: 0 auto;
            overflow-x: auto;
        }

        /* Styling for responsive table */
        @media only screen and (max-width: 767px) {
            .table-container {
                overflow-x: scroll;
            }
        }
    </style>

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

                include 'conexion.php';

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
                            <form action="./eliminar.php" method="POST">
                                <input type="hidden" value="<?php echo $mostrar['id_usuario']; ?>" name="txt-id" readonly>
                        <td><input type="submit" value="Eliminar" name="btnEliminar"></td>
                        </form>
                        </td>
                        <td>
                            <!-- Editar -->
                            <a href="./editar.php?id=<?php echo $mostrar['id_usuario']; ?>">Editar</a>
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