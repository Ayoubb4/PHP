<?php 

/* 1 Crea el código PHP que dé respuesta al siguiente planteamiento: 
Queremos conocer el color preferido de un usuario que nos visita. 
Le mostramos un formulario para que seleccione uno de los 4 colores que se muestran (Rojo, azul, verde y amarillo).
Al seleccionar uno de ellos y seleccionando “Guardar Color”, le mostramos un texto “Tu color preferido es: …” en su color preferido. ( < style="color: <?= htmlspecialchars($color) ?>;"> ).
También se muestra el texto “Si deseas cambiarlo o borrarlo, puedes hacerlo a continuación.”
Y además le damos la opción que lo cambie volviendo a elegir el color y guardando o que borre la selección.
 */
echo "<strong>Ejercicio 1</strong><br>";

    if(isset($_POST['color'])){
        $color=$_POST['color'];
        setcookie("color", $color, time() + 3600);

    }elseif(isset($_POST['borrar'])){
        setcookie("color", "", time() -3600);
        $color = "";
        
    }else{
        if(isset($_COOKIE['color'])){
            $color = $_COOKIE['color'];
        }else{
            $color = '';
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
    <form action="Tema4_Ej1.php" method="POST">
        <label for="color">Selecciona tu color preferido</label>    
        <select name="color" >
            <option value="red" <?php if(isset($color) && $color == 'red') {echo "selected";}?>>Rojo</option>
            <option value = "blue" <?php if(isset($color) && $color == 'blue'){echo "selected";}?>>Azul</option>
            <option value = "green" <?php if(isset($color) && $color == 'green'){echo "selected";}?>>Verde</option>
            <option value = "yellow" <?php if(isset($color) && $color == 'yellow'){echo "selected";}?>>Amarillo</option>
        </select>

        <input type="submit" value="Guardar Color"/>
    </form>
    
    <?php if($color){ ?>
        <p style="color: <?php echo $color ?>">Tu color preferido es: <?php echo $color ?>.</p>

        <p>Si deseas cambiarlo puedes hacerlo a continuacion</p>
    
    <?php }?>
    <form action="Tema4_Ej1.php" method="POST">
        <input type="submit" name="borrar" id="Borrar seleccion" value="Borrar color">
    </form>

</body>
</html>