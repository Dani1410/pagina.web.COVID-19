<!-- Destruye la sesion y nos lleva al login  -->

<?php

session_start();
session_destroy();
header("Location: ../login.php");