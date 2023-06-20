<header>
    <div class="container">
        <a href="#hero">
            <p class="logo">Bienvenido! <?php echo $_SESSION['primer_nombre']; ?></p>
        </a>
        <nav>
            <a href="#descripcion-general">Descripcion General</a>
            <a href="#sintomas">Sintomas</a>
            <a href="#evolucion">Evolucion</a>
            <a href="#contactanos">Contactanos</a>

            <?php if (isset($_SESSION['usuario'])) {
                $tipo_usuario = $_SESSION['tipo'];

                if ($tipo_usuario == 'admin') {
                    echo '<div class="menu__item container-submenu"><a href="#" class="menu__link submenu-btn">Usuarios <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="menu__item"><a href="./registrar.html" class="menu__link">Registrar</a></li>
                        <li class="menu__item"><a href="./php/leer.php" class="menu__link">Buscar</a></li>
                    </ul></div>';
                } else if ($tipo_usuario == 'usuario') {
                    echo '<div class="menu__item container-submenu"><a href="#" class="menu__link submenu-btn">PDFS <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="menu__item"><a href="./pdf/que-es.pdf" target="_blank" class="menu__link">¿Que es?</a></li>
                        <li class="menu__item"><a href="./pdf/tratamiento.pdf" target="_blank" class="menu__link">Tratamiento</a></li>
                        <li class="menu__item"><a href="./pdf/covid-19.pdf" target="_blank" class="menu__link">Sars-Cov-2</a></li>
                    </ul></div>';
                }
            } ?>

            <?php

            if (isset($_SESSION['usuario'])) {
                echo '<a href="./php/cerrar_sesion_be.php">Cerrar Sesion</a>';
            } else {
                echo '<a href="./login.php">Login</a>';
            }

            ?>

        </nav>
    </div>
</header>