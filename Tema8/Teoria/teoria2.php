<?php
$imagen_path = "./fondo.jpg"; // Ruta de la imagen

// Verificar si la imagen existe
if (!file_exists($imagen_path)) {
    die("Error: La imagen no existe en la ruta: " . realpath($imagen_path));
}

// Crear la imagen desde el archivo
$imagen = @imagecreatefromjpeg($imagen_path);

if (!$imagen) {
    die("Error: No se pudo cargar la imagen. Puede estar corrupta o no ser un JPEG válido.");
}

// Asignar color para el texto
$colorTexto = imagecolorallocate($imagen, 255, 0, 0);

// Agregar texto a la imagen
imagestring($imagen, 5, 50, 50, "Texto sobre imagen", $colorTexto);

// Enviar la imagen al navegador
header("Content-Type: image/jpeg");
imagejpeg($imagen);

// Liberar memoria
imagedestroy($imagen);
?>