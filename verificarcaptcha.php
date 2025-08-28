<?php
require 'conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret = "6LcEVLUrAAAAAOYbwjCbViUce_wgWJm6daPyfhYK";
    $response = $_POST['g-recaptcha-response'];

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
    $captcha_success = json_decode($verify);

    if ($captcha_success->success) {
        
        include 'conexion.php';

        $nombres = strtoupper(trim($_POST['nombres']));
        $apellido_paterno = strtoupper(trim($_POST['apellido_paterno']));
        $apellido_materno = strtoupper(trim($_POST['apellido_materno']));
        $dni = trim($_POST['dni']);
        $email = strtolower(trim($_POST['email']));
        $telefono = trim($_POST['telefono']);
        $universidad = trim($_POST['universidad']);
        $carrera = trim($_POST['carrera']);
        $ocupacion = $_POST['ocupacion'];
        $certificado = $_POST['certificado'];


        $stmt = $conexion->prepare("INSERT INTO participantes (nombres, apellido_paterno, apellido_materno, dni, email, telefono, universidad, carrera, ocupacion, certificado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $nombres, $apellido_paterno, $apellido_materno, $dni, $email, $telefono, $universidad, $carrera, $ocupacion, $certificado);

        if ($stmt->execute()) {
            echo "¡Inscripción realizada correctamente!
            (*) En caso de detectar algún error en los datos ingresados, por favor comunicarse al correo: 
            contacto@universidad.edu.pe";
            } else {
                if ($stmt->errno == 1062) {
                    if (strpos($stmt->error, 'dni') !== false) {
                        echo "⚠️ Este DNI ya se encuentra inscrito. Por favor revisa los datos o comunícate al correo: contacto@universidad.edu.pe";
                    } elseif (strpos($stmt->error, 'email') !== false) {
                        echo "⚠️ Este correo electrónico ya se encuentra inscrito. Por favor revisa los datos o comunícate al correo: contacto@universidad.edu.pe";
                    } else {
                        echo "⚠️ Ya existe un registro duplicado. Por favor revisa los datos o comunícate al correo: contacto@universidad.edu.pe";
                    }
                } else {
                    echo "Error al insertar: " . $stmt->error . "";
                }
            }

        $stmt->close();
        $conexion->close();
    } else {
        echo "Captcha no válido. Intenta de nuevo.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
