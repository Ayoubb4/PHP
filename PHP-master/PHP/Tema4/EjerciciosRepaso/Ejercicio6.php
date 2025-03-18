<!-- Ejercicio 2: Calculadora con Validaciones
Enunciado:
Crea un formulario en HTML con dos campos numéricos y un menú desplegable para elegir una operación aritmética (suma, resta, multiplicación o división).

En PHP:
Valida que ambos números sean valores válidos.
Realiza la operación seleccionada y muestra el resultado.
Si la operación es una división, verifica que el divisor no sea 0.
Muestra los errores si los datos son inválidos. -->
<?php 
    $errores = [];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = filter_var($_POST["num1"], FILTER_VALIDATE_INT);
        $num2 = filter_var($_POST["num2"], FILTER_VALIDATE_INT);
        $operacion = $_POST["operacion"];

        if ($num1 == false) {
            echo"Pon un numero valido";
        }
        
        if ($num2 == false) {
            echo"Pon un numero valido";
        }

        if(empty($errores)){
            switch ($operacion) {
                case "suma":
                    $resultado = $num1 + $num2;
                    break;
                case "resta":
                    $resultado = $num1 - $num2;
                    break;
                case "multiplicacion":
                    $resultado = $num1 * $num2;
                    break;
                case "division":
                    if ($num2 == 0) {
                        $errores[] = "No se puede dividir entre 0.";
                    } else {
                        $resultado = $num1 / $num2;
                    }
                    break;
                default:
                    $errores[]= "No se hace la operacion";
            }
        }

        if(empty($errores)){
            echo"El resultado de la $operacion es: $resultado ";
        }else{
            foreach ($errores as $error) {
                echo "El error es $error";
            }
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
    <form action="Ejercicio6.php" method="POST">
        <label for="num1" name="num1" id="num1">Num1</label>
            <input type="number" name="num1" id="num1">
        <label for="num2" name="num2" id="num2">Num2</label>
            <input type="number" name="num2" id="num2">

        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">Division</option>
        </select>

        <button type="submit">Calcular</button>


    </form>
</body>
</html>