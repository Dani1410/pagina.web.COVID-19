<?php

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "wolfchis0@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Configuración del servidor SMTP de Gmail
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUsername = 'wolfchis0@gmail.com';
$smtpPassword = 'Axel.08ok0';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar el servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->Port = $smtpPort;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls';

    // Configurar el remitente y destinatario
    $mail->setFrom($correo, $nombre);
    $mail->addAddress($destinatario);
    $mail->Subject = $asunto;
    $mail->Body = $carta;

    // Enviar el correo
    $mail->send();

    echo '
        <script>
            alert("Mensaje enviado correctamente");
            window.location = "../index.php";
        </script>
    ';
} catch (Exception $e) {
    echo '
        <script>
            alert("Error al enviar el mensaje");
            window.location = "../index.php";
        </script>
    ';
}

?>
