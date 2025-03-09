<!-- Ejercicios Prácticos
Trabajando con Cookies

Tarea 1: Escribe un script en PHP que:
Cree una cookie con tu nombre, con un tiempo de expiración de 1 hora.
Lea y muestre el valor de la cookie si existe.
Borra la cookie manualmente. -->

<?php 

    setcookie("Ayoubb", "usuario", time() + 3600, "/");
/* LEER Y MOSTRAR */
    if (isset($_COOKIE['Ayoubb'])) {
        echo "La cookie existe" . $_COOKIE['Ayoubb'];
    }else{
        echo "La cookie no existe";
    }
/* BORRAR */
    setcookie("Ayoubb", "usuario", time() - 3600, "/");
?>