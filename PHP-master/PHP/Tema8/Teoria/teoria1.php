<?php 


/* Tema 8 solo 2ºForma y 3º Forma */


/* 
    header ('Content_Type : image/jpeg');
    readfile('ruta del archivo')
*/

/* header("content-type:image/jpg");
readfile("imagenes\Las-imagenes-raw-son-los-negativos-digitales.jpg");
 */


// Crear una imagen en blanco
$ancho = 400;
$alto = 200;
$imagen = imagecreatetruecolor($ancho, $alto);


// Colores
$fondo = imagecolorallocate($imagen, 0, 102, 204);
$textoColor = imagecolorallocate($imagen, 0, 255, 255);
$borderColor = imagecolorallocate($imagen,255,255,0);

// Rellenar la imagen con color de fondo
imagefilledrectangle($imagen, 0, 0, $ancho, $alto, $fondo);

imagerectangle($imagen,0,0,$ancho-1,$alto-1,$borderColor);
// Agregar texto
$texto = "Hola, PHP!";
imagestring($imagen, 5, 150, 90, $texto, $textoColor);

// Mostrar imagen en el navegador
header("Content-Type: image/png");
imagepng($imagen);

// Liberar memoria
imagedestroy($imagen);
?>