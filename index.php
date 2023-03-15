<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "login.php"
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
    
    <link rel="icon" href="img/virus-solid.svg">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <script src="https://kit.fontawesome.com/1731f30281.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href="#hero"><p class="logo">COVID-19</p></a>
            <nav>
                <a href="#descripcion-general">Descripcion General</a>
                <a href="#sintomas">Sintomas</a>
                <a href="#evolucion">Evolucion</a>
                <a href="#contactanos">Contactanos</a>
                <a href="./login.php">Login</a>
                <a href="php/cerrar_sesion_be.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1 class="border">COVID-19</h1>
        <h1 class="wave">COVID-19</h1>
    </section>

    <section id="descripcion-general">
        <div class="container">
            <div class="img-oms"></div>
            <div class="texto">
                <h2>Descripcion general</h2>
                <p>
                    Los coronavirus son una <strong>familia de virus</strong> que pueden causar enfermedades como el resfriado común, el síndrome respiratorio agudo grave (SARS, por sus siglas en inglés) y el síndrome respiratorio de Oriente Medio (MERS, por sus siglas en inglés). En 2019 se identificó un nuevo coronavirus como la causa del brote de una enfermedad que se originó en China.
                    El virus se conoce como coronavirus 2 del síndrome respiratorio agudo grave (SARS-CoV-2). La enfermedad que causa se llama <strong>enfermedad por coronavirus 2019</strong> (COVID-19). En marzo de 2020, la Organización Mundial de la Salud (OMS) declaró el brote de la COVID-19 como pandemia.
                    Los grupos de salud pública, incluidos los Centros para el Control y la Prevención de Enfermedades (CDC, por sus siglas en inglés) de los Estados Unidos y la OMS, controlan la pandemia de la COVID-19 y publican información actualizada en sus sitios web. Estos grupos también emitieron recomendaciones para la prevención y el tratamiento del virus que causa la COVID-19.
                </p>
            </div>
        </div>
    </section>

    <section id="donde-surgio">
        <div class="container">
            <div class="texto">
                <h3>Dónde surgio</h3>
                <p>
                    Surgio en <strong>China</strong> y <strong>Arabia Saudí</strong> en los años 2002 y 2012 respectivamente. El primero tiene su origen en los <strong>murciélagos</strong>, mientras que el MERS-CoV provino de los <strong>camellos</strong> o dromedarios, quienes a su vez transmitieron el virus a los humanos por zoonosis, pero antes de entrar de lleno en la materia, es necesario explicar un término importante.
                </p>
            </div>
            <div class="img-china"></div>
        </div>
    </section>

    <section id="causas-y-propagacion">
        <div class="container">
            <h3>Causas y propagacion</h3>
            <p>
                La infección con coronavirus del síndrome respiratorio agudo grave de tipo 2 (<strong>SARS-CoV-2</strong>) causa la enfermedad por coronavirus 2019 (<strong>COVID-19</strong>). <br>
El virus que causa la COVID-19 se propaga con facilidad entre las personas. Según los datos, el virus de la COVID-19 se propaga principalmente <strong>de una persona a otra cuando hay contacto estrecho</strong>. El virus se propaga a través de las gotitas respiratorias que se liberan cuando una persona que tiene el virus tose, estornuda, respira, canta o habla. Estas gotitas pueden inhalarse o caer en la boca, la nariz o los ojos de alguien que esté cerca. <br>
En algunos casos, el virus de la COVID-19 <strong>puede propagarse cuando una persona está expuesta</strong>r a gotitas o aerosoles muy pequeños que permanecen en el aire por varios minutos u horas (trasmisión por el aire). <br>
El virus también se propaga <strong>si tocas una superficie donde se encuentra el virus</strong> y luego te tocas la boca, la nariz o los ojos. Sin embargo, el riesgo es bajo. <br>
Una persona que está infectada, pero no presenta síntomas puede trasmitir el virus de la COVID-19 (trasmisión asintomática). Una persona infectada pero que aún no presenta síntomas también puede trasmitir el virus de la COVID-19 (trasmisión presintomática). <br>
Es posible tener COVID-19 más de una vez. <br>
Cuando un virus tiene una o más mutaciones nuevas, dichas mutaciones se conocen como <strong>variantes del virus original</strong>. La variante ómicron (B.1.1.529) se trasmite con mayor facilidad que el virus original de la COVID-19 y la variante delta. Sin embargo, parece que causa un cuadro menos grave de la enfermedad. Las personas que tienen el <strong>esquema completo de vacunación</strong> pueden contraer infecciones posvacunación y trasmitir el virus a otros. Sin embargo, las vacunas contra la COVID-19 son eficaces para evitar enfermarse gravemente. Esta variante también reduce la eficacia de algunos tratamientos con anticuerpos monoclonales. La variante ómicron tiene algunas subvariantes (sublinajes) importantes, entre las que se incluyen la BA.5 y la BA.2.12.1. Según los Centros para el Control y la Prevención de Enfermedades (CDC, por sus siglas en inglés), la subvariante BA.5 constituyó aproximadamente el 88 % de las infecciones por COVID-19 que tuvieron secuenciación genética en los EE. UU. en agosto de 2022.
En abril, los Centros para el Control y la Prevención de Enfermedades (CDC, por sus siglas en inglés) degradaron la variante delta de una variante preocupante a una variante bajo supervisión. Esto significa que, en la actualidad, la variante delta no se considera una amenaza importante contra la salud pública en los Estados Unidos.
            </p>
        </div>
    </section>

    <section id="nuevo-coronavirus">
        <div class="container">
            <div class="texto">
                <h3>Nuevo coronavirus o COVID-19</h3>
                <p>
                    El virus COVID-19 fue reportado por primera vez el <strong>martes 7 de enero de 2020</strong>, por el CDC de China (Centro para el Control y la Prevención de Enfermedades), luego de que el 31 de diciembre de 2019 la Comisión de Salud Municipal de la ciudad de Wuhan en la provincia de Hubei, notificara 27 casos de un tipo de neumonía de etiología desconocida, siete de los cuales eran severos.
                    Un mes después, el <strong>número de infectados</strong> había aumentado a 9.692 casos, de ellos, 1.527 enfermaron de gravedad. El vínculo común de todos estos casos, es que se trataba de personas con algún tipo de relación con el <strong>Mercado de Huanan en Wuhan</strong>, en el cual se vende al mayoreo pescados, mariscos y animales vivos.
                    Las autoridades sanitarias del lugar, tomaron muestras en el mencionado mercado y el 1 de enero fue cerrado al público, ya que las mismas dieron positivas para el nuevo coronavirus.
                    Para el <strong>diez de enero</strong>, la primera secuencia genómica del coronavirus COVID-19 estuvo disponible al público en general.
                    La primera muerte por causa del virus, se reportó el 11 de enero.
                    Cabe destacar, que casi todos los casos reportados fuera de <strong>China</strong>, tienen el antecedente común de haber sido personas que viajaron a ese país y/o a la provincia de Hubei, antes del inicio de los síntomas.
                </p>
            </div>
                <div class="img-mercado"></div>
        </div>
    </section>

    <section id="sintomas">
        <div class="container">
            <h2>Sintomas</h2>
            <p>
                Los <strong>primeros sintomas</strong> tienden a ser: <br>
                <ul>
                    <li>Fiebre</li>
                    <li>Tos seca</li>
                    <li>Dificultad para respirar (disnea)</li>
                    <li>Fatiga (mialgia)</li>
                </ul>
                Muchas personas presentan <strong>otra clase de sintomas</strong>, te los dejaremos a continuacion para que estes alerta: <br>
                <ul>
                    <li>Dolor de gargante</li>
                    <li>Diarrea</li>
                    <li>Conjuntivitis</li>
                    <li>Perdida del gusto y el olfalto</li>
                    <li>Cambio en la coloracion de los dedos de los pies y las manos</li>
                </ul>
                Ya para las personas que se encuentran en <strong>estado de gravedad</strong>, los sintomas son más complicados: <br>
                <ul>
                    <li>Presion y dolor en el pecho</li>
                    <li>Incapacidad de moverse y a veces hasta hablar</li>
                    <li>Falta de aire</li>
                </ul>
                Para todas las personas que presentan los síntomas leves, <strong>lo más recomendable</strong> es que se resguarden en casa, pero las que tienen una sintomatología más grave, se les recomienda asistir inmediatamente al médico. <br>
La amplia distribución de los coronavirus, su diversidad, su constante <strong>recombinación genómica</strong> así como  el aumento y estrechamiento de las interacciones entre los humanos y los animales, han favorecido el surgimiento de nuevos coronavirus de tipo zoonótico. <br>
En el caso de los brotes del <strong>MERS</strong> y el <strong>SARS</strong>, la transmisión de humano a humano se produjo a través del contacto directo con personas infectadas y objetos contaminados o fómites, por lo que se cree que el COVID-19 podría transmitirse de manera semejante. Por tanto, tomar las medidas indicadas previamente, resulta crucial para todos.
            </p>
        </div>
    </section>

    <section id="evolucion">
        <div class="container">
            <div class="texto">
                <h2>Evolucion</h2>
                <p>
                    A medida que avanza la pandemia y <strong>aumenta el número de personas infectadas</strong>, se elevan sus oportunidades para evolucionar y adquirir nuevas ventajas que le <strong>permitan propagarse</strong> de forma más eficiente. Tal y como argumenta Ignacio López-Goñi, catedrático de Microbiología de la Universidad de Navarra ,“es cierto que este coronavirus muta menos que el de la gripe y el VIH, pero eso no quiere decir que no mute”.
                    Los cambios del virus que se conocen como mutaciones se producen al azar, pero están influidos por <strong>la presión a la que está sometido el virus</strong>. Uno de los factores que puede impulsar esos cambios es la vacunación. Por eso, en palabras de Raúl Rivas, profesor de Microbiología del Departamento de Microbiología y Genética de la Universidad de Salamanca, “no podemos dilatar en el tiempo la vacunación porque <strong>esa presión selectiva va a hacer que el virus busque salidas</strong> y van a empezar a surgir variantes capaces de escapar y transmitirse mucho mejor”.
                </p>
            </div>
                <div class="img-adn"></div>
            </div>
    </section>

    <section id="mutacion">
        <div class="container">
            <h3>Mutacion</h3>
            <p>
                “Los virus viven mutando”, reseña López-Goñi. “De hecho, cuando hablamos de virus no hablamos de especies víricas -tal y como hacemos con las especies de animales o plantas-, sino de cuasiespecies porque, en realidad, un virus es una nube de mutantes”. En virología no se tienen en cuenta los individuos o partículas virales, sino las poblaciones, es decir, miles de millones de partículas virales que se multiplican a una velocidad de vértigo.
Pero esa replicación viral no es perfecta; <strong>los virus cometen errores al copiar su material genético</strong>. “Una mutación es <strong>un cambio en una de las letras (nucleótidos) que forman el código genético</strong> de un organismo”, explica Rivas. En el caso de los coronavirus, al tratarse de virus que usa el ácido ribonucleico (ARN) como material genético, las letras son la adenina, la guanina, la citosina y el uracilo (A, G, C y U). Estas letras se unen de tres en tres formando tripletes (codones), que son los que <strong>conforman los diferentes tipos de aminoácidos</strong> que, a su vez, son los que <strong>forman las proteínas</strong>. Y las proteínas están implicadas tanto en la estructura como en las funciones de un virus. “Por ejemplo, el coronavirus utiliza proteínas como <strong>llaves para interactuar con las células humanas</strong>”, cita Rivas. Las mutaciones que afectan a esas proteínas pueden servir para que el virus <strong>entre mejor en la célula</strong>. <br>
Hay que tener en cuenta, según destaca López-Goñi, que las enzimas (proteínas que catalizan reacciones químicas) “que copian el ARN suelen cometer más errores, <strong>son más torpes</strong>. Por eso, la frecuencia de mutación es mucho más alta que en otros virus”.
            </p>
        </div>
    </section>

    <section id="vcv">
        <div class="carts">
            <div class="cart cart1">
                <div class="titulo"><h3>Variante</h3></div>
                <div class="texto-cart"><p>Al estar multiplicándose continuamente, la evolución y la selección natural operan en los virus “<strong>a alta velocidad o en cámara rápida</strong>”, indica López-Goñi. Muchas de esas mutaciones no tienen ningún efecto, mientras que otras pueden hacer que el virus se multiplique menos y, por lo tanto, acaban desapareciendo. “La mayoría de las veces las mutaciones no tienen significado biológico, pero <strong>cuanta mayor sea la tasa de mutaciones</strong>, es posible que, por mero azar o por presión selectiva, <strong>surjan cambios que sean importantes</strong>”, alega Rivas. “Cuando se modifica el código genético de una manera notable, <strong>dando lugar a alguna propiedad diferente</strong>, es cuando hablamos de linajes o variantes”.
                </p></div>
            </div>

            <div class="cart cart2">
                <div class="titulo"><h3>Cepa</h3></div>
                <div class="texto-cart"><p>Cuando los cambios producidos por las mutaciones son muy acentuados, hasta el punto de que <strong>inciden en factores clave del virus</strong> como su virulencia, su letalidad, su capacidad de desencadenar una respuesta inmunológica (antigenicidad), su transmisión… es cuando se habla de nuevas cepas.
                    Por lo tanto, la diferencia entre variantes y cepas es <strong>una cuestión de grados</strong>. La variante es una modificación del virus original con una relevancia limitada, mientras que <strong>la cepa supone cambios importantes</strong> y bien definidos en la biología del virus.
                    
                </p></div>
                
            </div>

            <div class="cart cart3">
                <div class="titulo"><h3>Virulencia</h3></div>
                <div class="texto-cart"><p>Las variantes de los virus -y en mucha mayor medida las cepas- pueden incorporar cambios significativos en aspectos fundamentales para la evolución de una epidemia o una pandemia como la de Covid-19: <strong>mejor capacidad de transmisión, mayor virulencia, más letalidad</strong>… Se pueden hacer predicciones, pero solo hasta cierto punto. “Lo esperable en la deriva evolutiva es que un virus se vaya haciendo cada vez más transmisible y que mate menos a su hospedador porque eso no le conviene para seguir transmitiéndose”, comenta López-Goñi. No obstante, recalca que los virus “no piensan” y la evolución “es al azar”, por lo que no descarta que el SARS-CoV-2 todavía “<strong>nos pueda dar algún susto</strong>”.
                    “Nos queda mucho por andar y van a seguir apareciendo variantes”, apostilla Rivas. “El problema es qué tipo de variantes surgen”.
                                
                </p></div>
            </div>
        </div>
    </section>

    <section id="proteina-s">
        <div class="container">
            <div class="img-proteina"></div>
            <div class="texto">
                <h3>Proteina S</h3>
                <p>
                    Entre las variantes que pueden resultar más preocupantes destacan las que afectan al gen que codifica la proteína S del virus. Se trata de la proteína que está en <strong>la corona o envoltura del coronavirus</strong>, que es la que, en palabras del catedrático de Microbiología de la Universidad de Navarra, “es la llave que utiliza el virus para entrar dentro de las células”. Es preciso estar al tanto y vigilar estrechamente los posibles cambios en esa proteína, ya que determinadas mutaciones pueden permitir que <strong>el virus entre mejor en las células</strong> y sea más virulento o más transmisible. Además, al ser la proteína más expuesta del virus, es contra la que el organismo genera más anticuerpos y, por ese motivo, <strong>en ella se basan la mayoría de las vacunas</strong>.
                </p>
            </div>
        </div>
    </section>
    
    <section id="adaptar-las-vacunas">
        <div class="container">
            <h3>Necesidad de adaptar las vacunas</h3>
            <p>
                Una mutación decisiva en la proteína S puede conferir al coronavirus la capacidad de escapar de la acción de las vacunas que actualmente se están administrando en todo el mundo. Aparentemente, si esa variante se propaga rápidamente por todo el mundo, el resultado sería potencialmente catastrófico, pero los expertos creen que no hay motivos para alarmarse en exceso. Si eso ocurre, lo que habrá que hacer es <strong>modificar las vacunas, tal y como se hace con la de la gripe</strong>, para que sean eficaces frente a las nuevas variantes o cepas del coronavirus. Y, lógicamente, volver a vacunar a quienes hayan recibido las vacunas más antiguas.
Las vacunas de Pfizer y Moderna presentan una ventaja en este aspecto, ya que <strong>la tecnología de ARN mensajero</strong> con la que están hechas permite modificarlas en un plazo muy corto de tiempo. En las otras vacunas, como la de AstraZeneca, lleva más tiempo cambiar su composición, pero también se pueden adaptar.
            </p>
        </div>
    </section>

    <section id="cepas-detectadas">
        <div class="container">
            <h3>¿Cuantas cepas del COVID-19 se han detectado?</h3>
            <p>La primera de ella es <strong>la cepa de Reino Unido</strong>, una variante llamada B.1.1.7 que experimentó una gran cantidad de mutaciones en el otoño de 2020. A diferencia de las otras variantes, ésta se caracteriza por su <strong>rápida y fácil propagación</strong>. De hecho, a España llegó por primera vez a finales de 2020 y tal es su expansión, que el Ministerio de Sanidad asegura que será mayoritaria en el mes de marzo.
                Asimismo, en el mes de enero de 2021, la comunidad científica informó que <strong>la cepa británica está asociada a un mayor riesgo de muerte</strong>, en comparación con las otras variantes.
                La segunda es <strong>la cepa sudafricana</strong>, o también conocida como B.1.351. Esta variante fue detectada originalmente en octubre de 2020 y comparte algunas mutaciones con la B.1.1.7. En España, el primer caso diagnosticado de esta cepa se produjo el pasado 28 de enero, en Vigo, en un hombre de 30 años, vinculado a la industria del naval y que había viajado a Sudáfrica por motivos laborales. A su regreso del viaje refirió síntomas compatibles con el virus pero <strong>no requirió hospitalización</strong>, informó en su momento el Servizo Galego de Saúde (Sergas).
Finalmente, la tercera, es <strong>la cepa brasileña</strong>, una variante llamada P.1, que se identificó por primera vez en viajeros provenientes de Brasil sometidos a pruebas de detección del Covid-19 rutinarias en el aeropuerto de Japón. Según informa el CDC, esta variante “contiene un juego de mutaciones adicionales que podrían afectar su capacidad de ser reconocida por los anticuerpos". Tal es así, que <strong>España ya ha anunciado que prohíbe los vuelos procedentes de Sudáfrica y Brasil</strong> para detener la expansión de estas cepas en concreto.
                </p>
        </div>
    </section>

    <section id="variantes">
        <div class="container">
            <h3>Variantes del COVID-19</h3>
            <p>
                Es posible que las definiciones funcionales de las variantes del SARS-CoV-2 que se presentan aquí se modifiquen periódicamente para <strong>adaptarse a la evolución</strong> continua de este virus y los nuevos conocimientos al respecto. Siempre que sea necesario, cualquier variante que no cumpla todos los criterios que se mencionan en estas definiciones se podrá designar como variante preocupante, de interés o bajo vigilancia, mientras que aquellas que entrañen riesgos menores que otras variantes circulantes se podrán reclasificar, tras solicitar asesoramiento al Grupo Consultivo Técnico de la OMS sobre Evolución de los Virus- en inglés, (este grupo se denominaba anteriormente Grupo de Trabajo sobre la Evolución de los Virus).
En las actualizaciones epidemiológicas semanales de la OMS- en inglés, se proporciona regularmente información actualizada sobre las clasificaciones del <strong>SARS-CoV-2</strong>, la distribución geográfica de las variantes preocupantes y los resúmenes de sus características fenotípicas (transmisibilidad, gravedad de la enfermedad, riesgo de reinfección e impactos en el diagnóstico y la eficacia de la vacuna) basada en los estudios publicados. 
            </p>
        </div>
    </section>

    <section id="prevencion">
        <div class="container">
            <div class="texto">
                <h2>Prevencion</h2>
                <p>La <strong>Organización Mundial de la Salud</strong> (OMS) recomienda a todos los países que intensifiquen la vigilancia sobre las infecciones respiratorias agudas graves, como la neumonía, haciendo un seguimiento a cualquier manifestación desacostumbrada de estas enfermedades y que les sean notificados los casos confirmados o probables de COVID-19. <br> 
                    <strong>Medidas de precaucion contra el COVID-19</strong> <br>
                    <ul>
                        <li>Lavarse muy bien las manos con agua y jabón o usar algún gel antibacterial con un mínimo de 60% de alcohol</li>
                        <li>Cubrirse la boca y la nariz al toser o estornudar, usando el antebrazo o con un pañuelo</li>
                        <li>Evitar tocarse la cara con las manos</li>
                        <li>Mantenerse a una distancia de un metro de otras personas</li>
                        <li>Evitar el contacto cercano con alguien resfriado</li>
                        <li>En caso de presentar los síntomas es mejor quedarse en casa o acudir a un médico especialista</li>
                        <li>No asistir a actos públicos</li>
                  <li>Es necesario desinfectar las superficies con las que se hace contacto frecuentemente</li>
                  <li>Cocinar muy bien las proteínas animales</li>
                  <li>Usar mascarillas para prevenir ser contagiado o en caso de estarlo, propagar el virus</li>
                </ul>
            </p>
        </div>
            <div class="img-virus"></div>
        </div>
    </section>

    <section id="mascarilla">
        <div class="container">
            <div class="img-cubrebocas"></div>
            <div class="texto">
                <h3>¿Cómo usar la mascarilla?</h3>
                <p>Luego de que el virus se propagara por todo el mundo, muchas personas han tenido que salir de sus casas para realizar sus labores diarias y llevar el pan de cada día, por lo que es sumamente indispensable y obligatorio el uso de las mascarillas. ¿Quieres saber cómo usarlas? ¡Presta mucha atención!
                    <ul>
                        <li>Debes lavarte las manos antes de colocártela y cada vez que la toques. Recuerda no pasarte la manos por ninguna parte de tu cara</li>
                        <li>No solo debes cubrir tu boca, también debes cubrir la nariz y el mentón</li>
                        <li>Si la mascarilla es de tela es importante que la laves cada vez que la uses y si es un tapabocas médico, solo debes usarlo una sola vez</li>
                    </ul>
                </p>
            </div>
        </div>
    </section>

    <section class="form_wrap" id="contactanos">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> wolfchis0@gmail.com</p>
                <p><span class="fa fa-mobile"></span> 55-2999-9983</p>
            </section>
        </section>

        
        <form action="php/enviar.php" method="POST" class="form_contact">
            <h2>Envia un correo</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" required>

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone" name="telefono">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" required>

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

    <div id="button-up">
        <i class="fas fa-chevron-up"></i>
    </div>

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="" alt="">
                </div>
                <div class="terms">
                    <p>
                        Esta página web es propiedad y está operado por Dani. Estos Términos establecen los términos y condiciones bajo los cuales tu puedes usar nuestra página web y servicios ofrecidos por nosotros. Esta página web ofrece a los visitantes informacion acerca del COVID-19. Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído, entendido y aceptado estar sujeto a estos Términos:
                    </p>
                </div>
            </div>

            <div class="box__footer">
                <h4>Secciones</h4>
                <a href="#descripcion-general">Desc. General</a>
                <a href="#sintomas">Sintomas</a>
                <a href="#evolucion">Evolucion</a>
                <a href="#prevencion">Prevencion</a>
            </div>

            <div class="box__footer">
                <h4>Referencias</h4>
                <a href="https://www.un.org/es/coronavirus" target="_blank">ONU</a>
                <a href="https://fontawesome.com/" target="_blank">FontAwesome</a>
            </div>

            <div class="box__footer">
                <h4>Redes Sociales</h4>
                <a href="https://www.facebook.com/profile.php?id=100055048711809" target="_blank"><i class="fa-brands fa-facebook"></i>Facebook</a>
                <a href="https://www.instagram.com/danix.1410/" target="_blank"><i class="fa-brands fa-instagram"></i>Instagram</a>
            </div>
        </div>
        <div class="box__copyrigtht">
            <hr>
            <p>Todos los derechos reservados &copy; 2023
                <b>Dani</b>
            </p>
        </div>
    </footer>

    <script src="js/header.js"></script>
    <script src="js/button-up.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/scroll-suave.js"></script>

</body>
</html>

