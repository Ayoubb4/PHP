<!-- Crea un formulario en HTML que solicite los siguientes datos al usuario: nombre, edad y correo electrónico. Implementa en PHP un script que:

Reciba los datos enviados mediante el método POST.
Realice las siguientes validaciones:
Sanitice el campo nombre para eliminar caracteres no permitidos.
Valide que la edad sea un número entero válido.
Verifique que el correo electrónico tenga un formato válido.
Muestre mensajes de error específicos si alguno de los campos no cumple las validaciones.
Si no hay errores, despliegue un mensaje de éxito junto con los datos ingresados por el usuario.
Restricciones:

Usa las funciones filter_var() para la validación y saneamiento de los datos.
Los mensajes de error deben almacenarse en un arreglo y mostrarse al usuario si es necesario. -->

<?php 
    $nombre = "";
    $email = "";
    $edad = "";

    $errores = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = filter_var($_POST["nombre"]);
        $edad = filter_var($_POST["edad"], FILTER_VALIDATE_INT);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);


        if (!$nombre) {
            $errores[]="Pon tu nombre";
        }

        if (!$edad) {
            $errores[]="Mete tu edad";
        }

        if(!$email){
            $errores[]="Pon tu email bien";
        }

        if (empty($errores)) {
            echo"Formulario enviado con exito <br>";
            echo"Tu nombre es $nombre <br>";
            echo "Tu email es $email <br>";
            echo "Tu edad es $edad <br>";
        }
    }

?>