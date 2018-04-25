<?php 
    $destino = "jgarcia@stigold.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: ".$nombre . "\ncorreo: " . $correo . "\nAsunto: " .$asunto ."\nMensaje: " .$mensaje;

    mail($destino,"contacto",$contenido);
    header("Location:index.html");

 ?>