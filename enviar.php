<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$destinatario = "jtautomacion@gmail.com";

$header = "From: noreply@example.com" . "\r\n";
$header .= "Reply-To: noreply@example.com" . "\r\n";
$header .= "X-Mailer:PHP/" . phpversion();

$carta = "De: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

$mail = @mail($destinatario, "Contacto Web", $carta, $header);

if ($mail) {
    echo '<script> 
    alert("¡Mensaje enviado exitosamente!");
    window.history.go(-1); 
    </script>';
}