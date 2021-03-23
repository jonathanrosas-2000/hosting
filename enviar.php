<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Web | Mensaje Enviado |jonathanrosas2000@hotmail.com </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="icon/jpg" href="https://i.pinimg.com/736x/1f/5c/79/1f5c79832b4d0fddf889e3fc956a992c.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<?php
    $myemail = 'jonathanrosas2000@hotmail.com';
    $name = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $message = $_POST¨['user_message'];

    $to = $myemail;
    $email_subject = "Nuevo mensaje:  $subject";
    $emial_body = "Haz recibido un nuevo mensaje. \n Nombre: $nombre \n Correo: $email \n Mensaje: $message";
    $headers = "From: $email";

    mail($to, $email_subject, $emial_body, $headers);
    echo "El mensaje se ha enviado correctamente"

    ?>
    <header>
        <a href="" class="logo">mi Portafolio</a>
        <div class="toggle" onclick="toggleMenu();">
            <ul class="menu">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#works">Trabajos</a></li>
                <li><a href="#about">Sobre mi</a></li>
                <li><a href="#services">Actividades</a></li>
                <li><a href="#tech">Tecnologías</a></li>
                <li><a href="#contact" class="contact-button">Contactar</a></li>
            </ul>
        </div>
    </header>
    <section class="banner" id="home">
        <div class="textBx">
            <h2>Bienvenido soy <br><span>Jonathan Rosas,</span></h2>
            <h3>Realizo <span id="career"></span></h3>
            <a href="./pdf/CV_LuisJonathanRosasRamos.pdf" download="CV_LuisJonathanRosasRamos" class="btn">
                Descargar CV
                </a>
            <a href="#works" class="btn">Ver Trabajos</a>
        </div>
    </section>
    <section class="works" id="works">
        <div class="heading">
            <h2>Trabajos Realizados</h2>
        </div>
        <div class="content">
            <div class="grid-works">
                <div class="activity">
                    <img src="img/amzon-clon.jpg" alt="amazon-clone">
                    <div class="activity-info">
                        <h1>Amazon Clone Challenge</h1>
                        <div class="data">
                            <div class="tools">
                                <div class="text">Tecnologías usadas:</div>
                                <div class="tool">React</div>
                                <div class="tool">Firebase</div>
                                <div class="tool">Metodo de pago</div>
                            </div>
                            <a href="https://clone-challenge-5be3d.web.app/" target="blank"><div class="visit-button">
                                Visitar
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <img src="img/slack-clone.jpg" alt="slack-clone">
                    <div class="activity-info">
                        <h1>Slack Clone Challenge</h1>
                        <div class="data">
                            <div class="tools">
                                <div class="text">Tecnologías usadas:</div>
                                <div class="tool">React</div>
                                <div class="tool">Firebase</div>
                                <div class="tool">Validación google</div>
                            </div>
                            <a href="https://slack-clone-challenge-e5685.web.app/" target="blank"><div class="visit-button">
                                Visitar
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <img src="img/tasn.jpg" alt="tuautoseminuevo.com">
                    <div class="activity-info">
                        <h1>tuautoseminuevo.com</h1>
                        <div class="data">
                            <div class="tools">
                                <div class="text">Tecnologías usadas:</div>
                                <div class="tool">PHP</div>
                                <div class="tool">Woocomerce</div>
                                <div class="tool">Plugins</div>
                            </div>
                            <a href="https://tuautoseminuevo.com/" target="blank"><div class="visit-button">
                                Visitar
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <img src="img/minimalistas.jpg" alt="tuautoseminuevo.com">
                    <div class="activity-info">
                        <h1>Web de Muebles Minimalistas</h1>
                        <div class="data">
                            <div class="tools">
                                <div class="text">Página SEO:</div>
                                <div class="tool"> Wordpress </div>
                                <div class="tool"> Uso de API de afiliados </div>
                                <div class="tool"> PHP </div>
                            </div>
                            <a href="https://mueblesminimalistas.online/" target="blank"><div class="visit-button">
                                Visitar
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <img src="img/camaras.jpg" alt="compratucamara.com">
                    <div class="activity-info">
                        <h1>Página automática de cámaras</h1>
                        <div class="data">
                            <div class="tools">
                                <div class="text">Página automática:</div>
                                <div class="tool"> PHP </div>
                                <div class="tool"> Uso de API de afiliados </div>
                                <div class="tool"> Texto spinning </div>
                            </div>
                            <a href="https://compratucamara.com/" target="blank"><div class="visit-button">
                                Visitar
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="heading">
            <h2>¿Quién Soy?</h2>
        </div>
        <div class="content">
            <div class="contentBx w50">
                <h3>Estudiante del Tecnológico de Monterrey siguiendo el camino de Full Stack Developer.</h3>
                <p>Hola, soy Luis Jonathan Rosas Ramos, estudiante de la carrera de Sistemas Computacionales, siguiendo el camino para convertirse en desarrollador web, con el tiempo aprendí que el internet es mi pasión y busco formar parte de una empresa del ramo tecnológico o del ramo de marketing digital para desarrollar mi pasión.<br>
                Soy una persona muy creativa, apasionada, extrovertida y que le encanta aprender, en especial temas relacionados al emprendimiento, desarrollo de empresas y tecnología. 
                </p>
            </div>
            <div class="w50">
                <img src="img1.jpg" class="img">
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="heading white">
            <h2>Actividades que hago</h2>
            <p>Estas son algunas de las actividades que he aprendido en mi vida web.</p>
        </div>
        <div class="content">
            <div class="servicesBx">
                <img src="icon1.png">
                <h2>Diseño Web</h2>
                <p>Ya que programar no era lo único importante para mi, aprendí a crear diseños, generar mockups y utilizar otro tipo de herramientas</p>
            </div>
            <div class="servicesBx">
                <img src="icon2.png">
                <h2>Pogramación Web</h2>
                <p>Genero aplicaciones web y páginas estáticas basándose en lenguajes puros y acompañados con frameworks</p>
            </div>
            <div class="servicesBx">
                <img src="icon3.png">
                <h2>Bases de datos</h2>
                <p>Aprendí a gestionar información a través de bases de datos, utilizando las conexiones de una manera eficaz y simple</p>
            </div>
            <div class="servicesBx">
                <img src="icon5.png">
                <h2>Escritura SEO</h2>
                <p>Genere páginas propias centradas en SEO, para rankear en las primeras páginas de Google y obtener mayores visitas mensuales</p>
            </div>
            <div class="servicesBx">
                <img src="icon4.png">
                <h2>Edición de Imagenes</h2>
                <p>Manejo de herramientas para la edición de imagenes, utiles para generar logos, modificar tamaños y generar mockups de productos</p>
            </div>
            <div class="servicesBx">
                <img src="icon6.png">
                <h2>Edición de Video</h2>
                <p>Creación de videos, para agregar a las webs y así contar una historia a las personas que aterrizan en la página</p>
            </div>
        </div>
    </section>

    <section class="tech" id="tech">
        <div class="heading">
            <h2>Tecnologías y herramientas que dominó</h2>
        </div>
        <div class="herramientas">
            <div class="front">
                <ul>
                    <h4>Herramientas frontend: </h4>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>TypeScript</li>
                    <li>PHP</li>

                    <h4>Frameworks con los que he trabajado: </h4>
                    <ul>
                        <li>Laravel</li>
                        <li>React</li>
                        <li>Angular</li>
                        <li>jQuery</li>
                    </ul>
                    <h4>Constructores CSS:</h4>
                    <ul>
                        <li>LESS</li>
                        <li>SASS</li>
                    </ul>
                    <h4>Extras que podrían ser útiles: </h4>
                    <ul>
                        <li>Bootstrap</li>
                        <li>Git</li>
                        <li>Npm</li>
                        <li>Diseño responsivo con Media Query</li>
                    </ul>
                </ul>    
            </div>
            <div class="back">
                <h4>Herramientas backend </h4>
                <ul>
                    <li>MongoDB</li>
                    <li>PHP</li>
                    <li>NodeJS</li>
                    <li>MySQL</li>
                    <li>Python</li>
                </ul>
                <br>
                <div class="extras">
                    <h4>Herramientas extra que podrían ser interesantes:</h4>
                    <ul>
                        <li>Photoshop</li>
                        <li>Illustrator</li>
                        <li>Figma</li>
                        <li>Adobe XD</li>
                        <li>Escritura SEO</li>
                        <li>Firebase</li>
                    </ul>
                </div>
            </div>
        </div>  
    </section>

    <section class="contact" id="contact">
        <div class="heading white">
            <h2>Contactar</h2>
            <p>Si te interesa contratarme o trabajar conmigo en un proyecto, mandame un mensaje</p>
        </div>
        <div class="content">
            <div class="contactInfoBox">
                <h3>Información de contacto</h3>
                <div class="contactInfoBx">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h3>Dirección</h3>
                            <p>Lindavista <br>Ciudad de México</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Telefono</h3>
                            <p>(52 1) 55 3410 8449</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>Correo</h3>
                            <p>jonathanrosas2000@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formBx">
                <form action="./enviar.php" mehtod="post">
                    <h3>Enviame un mensaje</h3>
                    <input type="text" id="name" name="user_name" placeholder="Nombre o empresa">
                    <input type="email" id="mail" name="user_mail" placeholder="Correo">
                    <textarea placeholder="Mensaje"></textarea>
                    <input type="submit" id="message" name="user_message" value="Enviar">
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });
        function toggleMenu(){
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('.menu');
            menuToggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
        var Textos = new Array();
      // Enter the names of the images below
      Textos[0] = "Desarrollo Front End.";
      Textos[1] = "Posicionamiento Web SEO para Google.";
      Textos[2] = "Desarrollo con Frameworks como React.";
      Textos[3] = "Desarrrollo Back End.";
      
      var nuevoTexto = -1; // para empezar en el primer texto -1, con 0 comienza por mostrar el segundo
      var totalTextos = Textos.length;

      function repetir() {
        nuevoTexto++;
        if (nuevoTexto == totalTextos) {
          nuevoTexto = 0;
        }
        document.getElementById("career").innerHTML = Textos[nuevoTexto];
        // cambiar 4 por el valor en segundos
        setTimeout("repetir()", 1.4 * 1000);
      }
      window.onload = repetir;
    </script>
</body>

</html>