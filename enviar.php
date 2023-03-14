<?php 

    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "wolfchis0@gmail.com";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Telefono: $telefono \n";
    $carta .= "Mensaje: $mensaje";

    mail($destinatario, $asunto, $carta);
    header('Location:/index.html');
?>