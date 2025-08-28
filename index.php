<?php
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleRed2025</title>
    <link rel="icon" type="image/x-icon" href="imagenes/logo_finesi.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<header>
    <div class="encabezado">
        <div class="logo">
            <a href="index.php">
                <img src="imagenes/logo_finesi.png" alt="Logo Finesi" style="width: 80px; height: auto;">
            </a>
            <p>FACULTAD DE INGENIERÍA <br> ESTADÍSTICA E INFORMÁTICA</p>
        </div>
        <div class="menu">
            <div><a href="inscripcion.php" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Inscríbete</a></div>
            <div><a href="#curso" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Sobre el curso</a></div>
            <div><a href="#ponentes" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Ponentes</a></div>
            <div><a href="#cronograma" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Cronograma</a></div>
            <div><a href="#auspiciadores" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Auspiciadores</a></div>
        </div>
    </div>
</header>

<body>

    <div style="position: relative; display: inline-block; width: 100%;">
        <img src="imagenes/fondo_paginas.png" style="width: 100%; height: 450px; object-fit: cover; filter: brightness(65%);">

        <div style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -10%); 
                color: white; font-size: 3em; font-weight: bold; text-align: center;" id="inscripcion">
            Bienvenido al curso de telecomunicaciones y redes
        </div>

        <div style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -10%);">
            <button onclick="window.location.href='inscripcion.php';">
                Inscríbete Aquí
            </button>
        </div>
    </div>

    <div style="background-color: #ffffffff; " id="curso">
        <div class="col2">
            <div>
                <img src="imagenes/linux.jpg"
                    alt="Reproducir música"
                    style="width:100px; cursor:pointer; margin:-20px auto;"
                    title="¡Dale aquí y disfruta!"
                    onclick="document.getElementById('miAudio').play();">

                <audio id="miAudio" loop>
                    <source src="music/Frenemis.mp3" type="audio/mpeg">
                </audio>

                <h1 class="cuadricula">¿Qué aprenderás en este curso?</h1>

            </div>
            <div class="bloque-texto" style="text-align: justify; line-height: 1.6; font-size: 16px;">
                En este curso aprenderás los fundamentos esenciales de las redes y las telecomunicaciones, comprendiendo cómo fluye la información a través de distintos dispositivos, medios de transmisión y protocolos de comunicación. Conocerás los modelos OSI y TCP/IP, el direccionamiento IP, la creación de subredes, así como los fundamentos de servidores. Además, realizaremos pruebas de vulnerabilidades y análisis de seguridad en entornos controlados, aplicando herramientas profesionales.
                <br><br>
                Contarás con laboratorios prácticos y ejercicios reales que te permitirán configurar, administrar y optimizar redes locales, así como comprender la gestión eficiente de infraestructuras de telecomunicaciones. Finalmente, tendrás una visión completa de las tendencias actuales en telecomunicaciones, como 5G, IoT y redes en la nube, preparándote para los retos del futuro de la conectividad.
            </div>
        </div>
        <div>
            <div class="img-col">
                <div class="logo-box">
                    <img src="imagenes/gns3.png" alt="gns3">
                </div>
                <div class="logo-box">
                    <img src="imagenes/kali-1.png" alt="kali-1">
                </div>
                <div class="logo-box">
                    <img src="imagenes/vmware.png" alt="vmware">
                </div>
                <div class="logo-box">
                    <img src="imagenes/mikrotik.jpg" alt="mikrotik">
                </div>
                <div class="logo-box">
                    <img src="imagenes/cisco.png" alt="cisco">
                </div>
                <div class="logo-box">
                    <img src="imagenes/ubuntu.png" alt="ubuntu">
                </div>
                <div class="logo-box">
                    <img src="imagenes/debian.png" alt="debian">
                </div>
                <div class="logo-box">
                    <img src="imagenes/red-hat.jpg" alt="red-hat">
                </div>
            </div>
        </div>
    </div>
    <div style="padding: 10px; text-align: center; color:#001bb6ff" id="ponentes">
        <h1 style="margin-bottom: 10px;">Tenemos las siguientes Ponencias</h1>
    </div>
    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; margin: 40px auto; max-width: 1800px;">

        <div style="background-color: white; padding: 20px; border-radius: 50px; 
                box-shadow: 0 8px 20px rgba(0,0,0,0.3); 
                border: 3px solid #001bb6ff; width: 500px; height: 100%;">
            <div style="display: flex; flex-direction: column; align-items: center;">
                <div class="cuadricula-img" style="width: 200px; height: 200px; margin-bottom: 20px;">
                    <img src="imagenes/ponencia.jpg" alt="Ponencia" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                </div>
                <div class="bloque-texto" style="text-align: center;">
                    <h2 style="margin: 0 0 5px 0; color: #001bb6ff;">Jerson Romario Gomez Cahuana</h2>
                    <h4 style="margin: 0 0 10px 0; color: #001bb6ff;">Ingeniero Electrónico</h4>
                    <p style="margin: 0 0 10px 0; text-align: justify;">
                        Ingeniero Electrónico titulado, con especialidad en Telecomunicaciones, Telemática y Redes, egresado de la Universidad Nacional del Altiplano – Puno.
                        Con experiencia en redes inalámbricas, telecomunicaciones, informática, soporte técnico y análisis de datos.
                        Ha desarrollado proyectos en optimización de redes, mitigación de interferencias, gestión de espectro radioeléctrico y seguridad informática.
                        Actualmente se desempeña como Especialista de Asistencia de TI en LAXMY TECHNOLOGY E.I.R.L. y lidera operaciones en Lockj Raven Shield S.R.L.
                    </p>
                    <p class="tema-ponente" style="margin: 0;"><strong>Tema de la ponencia:</strong> [Título de tu ponencia]</p>
                </div>
            </div>
        </div>


        <div style="background-color: white; padding: 20px; border-radius: 50px; 
                box-shadow: 0 8px 20px rgba(0,0,0,0.3); 
                border: 3px solid #001bb6ff; width: 500px; height: 100%;">
            <div style="display: flex; flex-direction: column; align-items: center;">
                <div class="cuadricula-img" style="width: 200px; height: 200px; margin-bottom: 20px;">
                    <img src="imagenes/ponencia.jpg" alt="Ponencia" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                </div>
                <div class="bloque-texto" style="text-align: center;">
                    <h2 style="margin: 0 0 5px 0; color: #001bb6ff;">Jerson Romario Gomez Cahuana</h2>
                    <h4 style="margin: 0 0 10px 0; color: #001bb6ff;">Ingeniero Electrónico</h4>
                    <p style="margin: 0 0 10px 0; text-align: justify;">
                        Ingeniero Electrónico titulado, con especialidad en Telecomunicaciones, Telemática y Redes, egresado de la Universidad Nacional del Altiplano – Puno.
                        Con experiencia en redes inalámbricas, telecomunicaciones, informática, soporte técnico y análisis de datos.
                        Ha desarrollado proyectos en optimización de redes, mitigación de interferencias, gestión de espectro radioeléctrico y seguridad informática.
                        Actualmente se desempeña como Especialista de Asistencia de TI en LAXMY TECHNOLOGY E.I.R.L. y lidera operaciones en Lockj Raven Shield S.R.L.
                    </p>
                    <p class="tema-ponente" style="margin: 0;"><strong>Tema de la ponencia:</strong> [Título de tu ponencia]</p>
                </div>
            </div>
        </div>

    </div>



    </div>
    <div id="cronograma">
        <h1 style="padding: 20px; text-align: center; color: #001bb6ff;">
            Cronograma del curso
        </h1>
        <div class="col-3" style="display: flex; gap: 20px;">
            <div>
                <div style="text-align: center;">
                    <h2 style="color: #001bb6ff; text-align: center; margin: 0;">Día 1 - Presencial</h2>
                </div>
                <div style="text-align: center;">
                    <h2 style="color: #0077b6;">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        Lugar:
                    </h2>

                    <h3 class="cuadricula-text">Auditorio Finesi</h3>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.91390257295268!2d-70.01729335128347!3d-15.823850018734806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d693cb33d1a89%3A0x333a534d425ba4bd!2sFacultad%20de%20Ingenier%C3%ADa%20Estadistica%20e%20Informatica%20(Pab.%20Nuevo)!5e0!3m2!1sen!2spe!4v1756235884510!5m2!1sen!2spe" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div>
                        <h3 style="color: #0077b6;">🗓 Fecha y Hora:</h3>
                        <h3 class="cuadricula-text">21 de septiembre de 2025<br> 10 a.m. - 13:00 p.m.</h3>

                    </div>
                </div>
            </div>
            <div style="border-left: 4px solid #001bb6ff; padding-left: 20px;">
                <div style="text-align: center;">
                    <h2 style="color: #001bb6ff; text-align: center; margin: 0;">Día 2 - Virtual</h2>
                </div>
                <div style="text-align: center;">
                    <h2 style="color: #0077b6;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0077b6">
                            <path d="M240-320h320v-128l160 128v-320L560-512v-128H240v320Zm-80 160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0-480v480-480Z" />
                        </svg>
                        Vía:
                    </h2>

                    <h3 class="cuadricula-text">Google Meet</h3>
                    <div><img src="imagenes/pinguino2.jpg" alt="pinguino" style="width: 150px; height: auto;"></div>
                    <div>
                        <h3 style="color: #0077b6;">🗓 Fecha y Hora:</h3>
                        <h3 class="cuadricula-text">22 de septiembre de 2025<br> 10 a.m. - 13:00 p.m.</h3>
                    </div>
                </div>
            </div>
            <div style="border-left: 4px solid #001bb6ff; padding-left: 20px;">
                <div>
                    <h2 style="color: #001bb6ff; text-align: center; margin: 0;">Día 3 - Virtual</h2>
                </div>
                <div style="text-align: center;">
                    <h2 style="color: #0077b6;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0077b6">
                            <path d="M240-320h320v-128l160 128v-320L560-512v-128H240v320Zm-80 160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0-480v480-480Z" />
                        </svg>
                        Vía:

                    </h2>

                    <h3 class="cuadricula-text">Google Meet</h3>
                    <div><img src="imagenes/pinguino1.jpg" alt="pinguino" style="width: 350px; height: auto;"></div>

                    <div>
                        <h3 style="color: #0077b6;">🗓 Fecha y Hora:</h3>
                        <h3 class="cuadricula-text">23 de septiembre de 2025<br> 10 a.m. - 13:00 p.m.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="auspiciadores">
            <h1 style="text-align: center;color: #001bb6ff;">Auspiciadores</h1>
            <div class="img-col">
                <div class="logo-box">
                    <img src="imagenes/logo_UNAP.png" alt="Auspiciador 1">
                    <p>Universidad Nacional del Altiplano</p>
                </div>
                <div class="logo-box">
                    <img src="imagenes/logo-epie.png" alt="Auspiciador 2">
                    <p>Ingeniería Electrónica</p>
                </div>
                <div class="logo-box">
                    <img src="imagenes/logo_finesi.png" alt="Auspiciador 3">
                    <p>Ingeniería Estadística e Informática</p>
                </div>
                <div class="logo-box">
                    <img src="imagenes/logo_laxmy.png" alt="Auspiciador 4">
                    <p>LAXMY TECHNOLOGY E.I.R.L</p>
                </div>
                <div class="logo-box">
                    <img src="imagenes/logo_raven.png" alt="Auspiciador 5">
                    <p>LOCK RAVEN SHIELD S.R.L.</p>
                </div>
            </div>
        </div>
</body>

<footer style="background-color:  #001bb6ff; color: white; font-family: Arial, sans-serif; padding: 40px 20px;">
    <div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between; max-width: 1200px; margin: 0 auto;">

        <div style="flex: 1; min-width: 250px;">
            <h3 style="color: #ffd500;">Lock Raven Shield S.R.L.</h3>
            <p><strong>Teléfono:</strong> (+51) 977771935</p>
            <p><strong>Facebook:</strong><a href="https://www.facebook.com/gc.romario" style="text-decoration: none; color: white;"> gc.romario</a> </p>
            <p><strong>Correo:</strong><a href="mailto:lockravenshield@gmail.com" style="text-decoration: none; color: white;"> lockravenshield@gmail.com</a></p>
        </div>

        <div style="flex: 1; min-width: 250px;">
            <h3 style="color: #ffd500;">Contáctanos en nuestras redes sociales:</h3>
            <a href="https://www.facebook.com" target="_blank" style="color: white; margin: 0 30px; font-size: 2em;"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com" target="_blank" style="color: white; margin: 0 30px; font-size: 2em;"><i class="fab fa-youtube"></i></a>
            <a href="https://www.tiktok.com" target="_blank" style="color: white; margin: 0 30px; font-size: 2em;"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.whatsapp.com" target="_blank" style="color: white; margin: 0 30px; font-size: 2em;"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px; border-top: 1px solid #555; padding-top: 15px; font-size: 0.9em;">
        Copyright © 2025 Lock Raven Shield S.R.L. Todos los derechos reservados.
    </div>
</footer>


</html>