<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recuperar los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar la dirección de correo a la que enviar el mensaje
    $to = "lionel.cutro@gmail.com"; // Reemplaza "tu_correo@example.com" con tu dirección de correo

    // Crear el contenido del correo
    $email_content = "Nombre: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Asunto: $subject\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Enviar el correo electrónico
    mail($to, "Formulario de contacto", $email_content);

    // Mostrar mensaje de éxito en la misma página
    echo "<p>Mensaje enviado con éxito. ¡Gracias por contactarme!</p>";
}
?>
