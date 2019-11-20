<?php
    $destino ="lavaderosr@gmail.com";
    $nombre= $_POST["nombre"];
    $email= $_POST["email"];
    $telefono= $_POST["telefono"];
    $msj= $_POST["msj"];
    $contenido = "Nombre :" . $nombre . "\nEmail: " . $email . "\nTelefono: " .$telefono . "\nMensaje: " . $msj;
    mail($destino,"contacto", $contenido);
    header("location:gracias.html");
?>