<?php

include("conexion.php"); 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/estilo1.css">
    <title>CursoRedes2025</title>
</head>
<body>
    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                <a href="#inscripcion" class="text-decoration-none text-dark">Inscribete</a>
                </div>
                <div class="col">
                <a href="#Sobre el curso" class="text-decoration-none text-dark">Sobre el curso</a>
                </div>
                <div class="col">
                <a href="#Ponentes" class="text-decoration-none text-dark">Ponentes</a>
                </div>
                <div class="col">
                <a href="#contacto" class="text-decoration-none text-dark">Contacto</a>
                </div>
                <div class="col">
                <a href="#Auspiciadores" class="text-decoration-none text-dark">Auspiciadores</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid position-relative">
        <img src="imagenes/imagen1.jpg" class="img-fluid w-100" alt="Descripción de la imagen" style="max-height: 450px; object-fit: cover;">

        <div class="position-absolute top-50 end-0 translate-middle-y text-white text-end pe-5">
            <h2>Bienvenido al Curso</h2>

            <a href="#inscripcion" class="boton-personalizado">
                Inscríbete ahora
            </a>
        </div>
    </div>

    <main>
        <div class="container text-center">
        <div class="row">
            <div class="col">
            <h3 class="cuadricula">¿Cuál es el motivo y finalidad del Curso-Taller?</h3>
            </div>
            <div class="col">
            El Curso-Taller de Administración de Redes y Comunicaciones tiene como finalidad fortalecer las competencias técnicas de los estudiantes y profesionales en el ámbito de las telecomunicaciones y la informática. Se trata de un evento académico y práctico orientado a la capacitación en el diseño, gestión y optimización de redes, así como en el uso de herramientas modernas para garantizar un funcionamiento eficiente y seguro de los sistemas de comunicación.
            </div>
        </div>
        </div>


    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> - Mi sitio con PHP + CSS</p>
    </footer>

</body>
</html>
