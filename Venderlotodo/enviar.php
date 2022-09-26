<?php
$destino="eniodiaz@venderlotodo.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido ="nombre:".$nombre ."\ncorreo:" .$correo . "\ntelefono " . $telefono ."\nmensajes: " .$mensaje;
mail($destino,"Contacto",$contenido);
header("Location:index.html#contactenos")
?>