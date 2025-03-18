<?php 
session_start();

//Miramos si el servidor registra el metodo post y si el boton de reservar esta seteado
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservar'])){
        //gurdamos en una variable el post de la seleccion y configuramos la cookie dandole valor y refiriendonos al la variable de la opcion 
        $evento = htmlspecialchars($_POST['evento']);
        setcookie("evento_fav", $evento, time() +3600);
//si el boton cerrar esta seteado se encarga de eliminar la cookie terminar la sesion y redirigirte al inicio de sesion
    }elseif(isset($_POST['cerrar'])){
        setcookie("evento_fav", "", time() -3600);
        session_destroy();
        header("Location: eventos.php");
        exit;

    }else{
    //si se detecta que hay una cookie ya, se toma el valor de la cookie, si no, no se pone nada en el evento y se deja que se seleccione
        if(isset($_COOKIE['evento_fav'])){
            $evento = $_COOKIE['evento_fav'];
        }else{
            $evento = '';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reservas de Eventos</h1>
<!-- LLamamos al php para que nos ponga el texto de bienvenida -->
    <?php 
        if($_SESSION['nombre'] && $_SESSION['correo']){
            echo "<p>Bienvenido, ". htmlspecialchars($_SESSION['nombre']) ."(". htmlspecialchars($_SESSION['correo'].")");
        }
    ?>

    <h2>Eventos disponibles</h2>
    <form action="" method="post">
        <select name="evento">
            <option value="Concierto de Rock">Concierto de Rock</option>
            <option value="Obra de Teatro">Obra de Teatro</option>
            <option value="Charla de Tecnologia">Charla de Tecnologia</option>
        </select>
        <input type="submit" name="reservar" value="reservar">
    </form>
<!-- Hacemos una breve confirmacion de que si esta seteado el valor de evento que lo imprima en una lista desordenada -->
    <?php if($evento){?>
        
        <ul><li><?php echo $evento; ?></li></ul>

    <?php } ?>


<!-- el formulario que se encargaria de destruir la sesion y destruir la cookie -->
    <form action="" method="POST">
        <input type="submit" name="cerrar" value="Cerrar Sesión">
    </form>
    


</body>
</html>