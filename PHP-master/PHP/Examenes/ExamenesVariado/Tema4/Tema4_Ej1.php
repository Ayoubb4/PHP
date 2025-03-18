<?php 
/* Ejercicio 6
Crea un formulario donde el usuario pueda seleccionar su fruta favorita entre "Manzana", "Plátano", "Naranja" y "Pera".

Al pulsar "Guardar Preferencia", debe mostrarse: "Tu fruta favorita es: ..." con un color asociado.
Debe permitir cambiar la selección o eliminarla. */

    if(isset($_POST['fruta'])){
        $fruta = $_POST['fruta'];
        setcookie("fruta_preferida", $fruta, time() +3600);
    }elseif(isset($_POST['borrar'])){
        setcookie("fruta_preferida", "", time() -3600);
        $fruta = '';
    }else{
        if(isset($_COOKIE['fruta_preferida'])){
            $fruta = $_COOKIE['fruta_preferida'];
        }else{
            $fruta='';
        }
    }

    $colores = [
    "red" => "Manzana",
    "yellow" => "Plátano",
    "orange" => "Naranja",
    "green" => "Pera"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu fruta favorita</title>
</head>
<body>

    <form action="Tema4_Ej1.php" method='POST'>
        <select name="fruta">
            <option value="red" <?php if($fruta == 'red') { echo "selected"; }?>>Manzana</option>
            <option value="yellow" <?php if($fruta == 'yellow'){ echo "selected"; }?>>Plátano</option>
            <option value="orange" <?php if($fruta == 'orange'){ echo "selected"; }?>>Naranja</option>
            <option value="green" <?php if($fruta == 'green'){ echo "selected"; }?>>Pera</option>
        </select>

        <input type="submit" value="Guardar preferencias">
    </form>

    <?php if($fruta){ ?>
        <p style="color: <?php echo htmlspecialchars($fruta); ?>">
            Tu fruta preferida es: <?php echo htmlspecialchars($colores[$fruta]); ?>
        </p>
        <p>Si quieres cambiar de fruta, puedes hacerlo aquí:</p>
    <?php } else { ?>
        <p>Selecciona tu fruta preferida:</p>
    <?php } ?>

    <form action="Tema4_Ej1.php" method="POST">
        <input type="submit" name="borrar" value="Borrar fruta">
    </form>

</body>
</html>