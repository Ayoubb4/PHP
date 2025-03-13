<?php

if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {

    die("No se pudo subir la imagen");
}

$imagenRuta = "imagenes/" . basename($_FILES["imagen"]["name"]);

if (!move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagenRuta)) {
    die("No se pudo guarda la imagen.");
}

$imagen = imagecreatefromjpeg($imagenRuta);

if (!$imagen) {
    die("Error al procesar la imagen.");
}


$textoSuperior = $_POST["texto"];
$textoInferior = $_POST["texto1"];

$colorTexto = imagecolorallocate($imagen, 255, 255, 255);  
$sombraColor = imagecolorallocate($imagen, 0, 0, 0);  