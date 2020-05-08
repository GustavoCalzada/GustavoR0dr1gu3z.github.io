<?php
//Llamando a los campos

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Datos para el correo

$destinatario = "gustavo.soader.cx@gmail.com";
$asunto = "Contacto de Nuestra Página Web";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Tema: $subject \n";
$carta .= "Mensaje: $message \n";

//Enviar mensaje
mail($destinatario, $asunto, $carta);
?>