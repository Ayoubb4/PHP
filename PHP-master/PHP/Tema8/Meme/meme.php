<?php
if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
    die("Error al subir la imagen.");
}

$imagen_subida = "imagenes/" . basename($_FILES["imagen"]["name"]);

if (!move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen_subida)) {
    die("Error al guardar la imagen.");
}

$imagen = imagecreatefromjpeg($imagen_subida);

if (!$imagen) {
    die("Error al procesar la imagen.");
}

$textoSuperior = $_POST["texto_superior"];
$textoInferior = $_POST["texto_inferior"];

$colorTexto = imagecolorallocate($imagen, 255, 255, 255); // Blanco
$sombraColor = imagecolorallocate($imagen, 0, 0, 0); // Negro (para sombra)

$fuente = __DIR__ . "./Arial.ttf";
if (!file_exists($fuente)) {
    die("Error: La fuente no se encuentra.");
}

$tamanioFuente = 30;
$anchoImagen = imagesx($imagen);
$altoImagen = imagesy($imagen);

function escribirTexto($imagen, $texto, $y, $tamanioFuente, $colorTexto, $sombraColor, $fuente, $anchoImagen) {
    $cajaTexto = imagettfbbox($tamanioFuente, 0, $fuente, $texto);
    $anchoTexto = abs($cajaTexto[2] - $cajaTexto[0]);
    $x = ($anchoImagen - $anchoTexto) / 2;

    imagettftext($imagen, $tamanioFuente, 0, $x + 2, $y + 2, $sombraColor, $fuente, $texto);
    imagettftext($imagen, $tamanioFuente, 0, $x, $y, $colorTexto, $fuente, $texto);
}

escribirTexto($imagen, strtoupper($textoSuperior), 50, $tamanioFuente, $colorTexto, $sombraColor, $fuente, $anchoImagen);
escribirTexto($imagen, strtoupper($textoInferior), $altoImagen - 30, $tamanioFuente, $colorTexto, $sombraColor, $fuente, $anchoImagen);

$nombreMeme = "meme_" . time() . ".jpg";
$rutaMeme = "memes/" . $nombreMeme;
imagejpeg($imagen, $rutaMeme, 100);

header("Content-Type: image/jpeg");
imagejpeg($imagen);

imagedestroy($imagen);
?>