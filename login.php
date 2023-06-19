<?php

session_start();

if (isset($_SESSION['usuario'])) {
    $_SESSION['tipo'] = $tipo_usuario;
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./css/login-estilos.css">

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LffPZUmAAAAAMEvr5CH0A8zy59AQJumO1CAPHf2"></script>

</head>

<body>

    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6LffPZUmAAAAAMEvr5CH0A8zy59AQJumO1CAPHf2', {
                    action: 'LOGIN'
                });
                // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
                // reCAPTCHA Enterprise to the end user's browser.
                // This token must be validated by creating an assessment.
                // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
            });
        }
    </script>

    <main>
        <div class="g-recaptcha" data-sitekey="6LfwcaQmAAAAAJHJxrZ2Tn-NCHz4OH6qiBbiwhre"></div>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="./js/login-script.js"></script>
</body>

</html>