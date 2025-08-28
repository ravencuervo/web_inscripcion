<?php
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inscripción al Curso</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imagenes/logo_finesi.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
            <div><a href="index.php" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Inicio</a></div>
            <div><a href="#auspiciadores" style="text-decoration: none; color: #001bb6ff; font-weight: bold;">Auspiciadores</a></div>
        </div>
    </div>
</header>

<body>
    <h1 style="text-align: center; padding-top: 80px; color: #001bb6ff;">Formulario de Inscripción</h1>
    <div class="col02">
        <div>

            <form id="formularioInscripcion" method="POST" action="" style="max-width: 600px; margin: 1; color: #001bb6ff;">
                <h2>Inscripción al Curso de Redes y Telecomunicaciones</h2>

                <label for="nombres">Nombre(s):</label>
                <input type="text" style="width: 200px; text-transform: uppercase;" id="nombres" name="nombres" required><br><br>

                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" style="width: 200px; text-transform: uppercase;" id="apellido_paterno" name="apellido_paterno" required><br><br>

                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" style="width: 200px; text-transform: uppercase;" id="apellido_materno" name="apellido_materno" required><br><br>

                <label for="dni">DNI / Documento de identidad:</label>
                <input type="number" style="width: 200px;" id="dni" name="dni" required><br><br>

                <label for="email">Correo electrónico:</label>
                <input type="email" style="width: 200px; text-transform: lowercase;" id="email" name="email" placeholder="ejemplo@dominio.com" required><br><br>

                <label for="telefono">Número de Celular:</label>
                <input type="number" style="width: 200px;" id="telefono" name="telefono" placeholder="+51 9XXXXXXXX" required><br><br>

                <label for="universidad">Universidad / Institución:</label>
                <select id="universidad" name="universidad" required style="width: 100%; max-width: 400px;">
                    <option value="">Seleccione universidad...</option>
                </select><br><br>

                <label for="carrera">Carrera / Profesión:</label>
                <select id="carrera" name="carrera" required style="width: 100%; max-width: 400px;">
                    <option value="">Seleccione carrera...</option>
                </select><br><br>

                <label for="ocupacion">Ocupación actual:</label>
                <select id="ocupacion" name="ocupacion" required>
                    <option value="">Seleccione...</option>
                    <option value="estudiante">ESTUDIANTE</option>
                    <option value="profesional">PROFESIONAL</option>
                </select><br><br>

                <label>¿Desea certificado digital?</label><br>
                <input type="radio" id="certificado_si" name="certificado" value="si" required>
                <label for="certificado_si">Sí, deseo el certificado digital (previo pago Yape)</label><br>

                <input type="radio" id="certificado_no" name="certificado" value="no" required>
                <label for="certificado_no">No, solo participaré en el curso gratuito</label><br><br>

                <div id="pago_yape" style="display:none;">
                    <p><strong>Escanee el siguiente QR para realizar el pago vía Yape:</strong></p>
                    <img src="imagenes/qr.png" alt="QR de Yape" width="200"><br>
                    <small>Luego de realizar el pago, se enviará la confirmación vía WhatsApp</small>
                </div><br>

                <div class="g-recaptcha" data-sitekey="6LcEVLUrAAAAAPxEFXwT36vT-g9ttzUxZUKCUJyn"></div><br></br>

                <button type="submit">Enviar inscripción</button>
            </form>

            <div id="mensajeModal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%);
     background:#fff; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.3); z-index:1000;">
                <span id="cerrarModal" style="cursor:pointer; float:right;">&times;</span>
                <div id="contenidoModal"></div>
            </div>

            <script>
                document.querySelectorAll('input[name="certificado"]').forEach((elem) => {
                    elem.addEventListener("change", function(event) {
                        if (event.target.value === "si") {
                            document.getElementById("pago_yape").style.display = "block";
                        } else {
                            document.getElementById("pago_yape").style.display = "none";
                        }
                    });
                });

                document.getElementById('formularioInscripcion').addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);

                    fetch('verificarcaptcha.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            alert(data);
                            if (data.includes("correctamente")) {
                                grecaptcha.reset();
                                this.reset();
                            }
                        })
                        .catch(error => alert('Error al enviar el formulario: ' + error));
                });
            </script>

            <script src="universidades.js"></script>
        </div>
        <div>
            <br><br>
            <div>

                <div class="carrusel">
                    <img src="imagenes/finesi02.jpg" class="active" alt="Imagen 1">
                    <img src="imagenes/finesi3.jpg" alt="Imagen 2">
                    <img src="imagenes/finesi4.jpg" alt="Imagen 3">
                    <img src="imagenes/finesi5.jpg" alt="Imagen 4">
                </div>

            </div>
            <div style="font-size: 12px; color: #555; text-align: justify; width: 800px; margin: 10px auto 0 auto;">
                (*) Toda la información proporcionada en este formulario es de carácter veraz y corresponde a datos reales.
                Cualquier información falsa, inexacta o incompleta será sancionada por la Facultad de Ingeniería Estadística e Informática
                de la Universidad Nacional del Altiplano, conforme a las normas legales y reglamentarias aplicables.
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

    <script>
        const images = document.querySelectorAll('.carrusel img');
        let current = 0;

        function showNextImage() {
            images[current].classList.remove('active');
            current = (current + 1) % images.length;
            images[current].classList.add('active');
        }

        setInterval(showNextImage, 4000);
    </script>
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