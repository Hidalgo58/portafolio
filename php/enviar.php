<?php
$destino = "christoferhidalgo58@gmail.com";
$nombre = $_POST["nombre"];
$nombre = $_POST["correo"];
$nombre = $_POST["mensaje"];

$contenido = "nombre:" . $nombre . "\ncorreo:" . $correo . "\nmensaje:" . $mensaje;

mail($destino,"Hola, te contacto desde tu Website",$contenido);

?>