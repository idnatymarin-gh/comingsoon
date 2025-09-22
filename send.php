<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);

    $to = "id.natymarinstudio@gmail.com";  // 👈 pon aquí tu correo
    $subject = "Nuevo registro en Coming Soon";
    $message = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono";
    $headers = "From: noreply@tudominio.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Mensaje enviado";
    } else {
        http_response_code(500);
        echo "Error al enviar";
    }
} else {
    http_response_code(405);
    echo "Método no permitido";
}
?>
