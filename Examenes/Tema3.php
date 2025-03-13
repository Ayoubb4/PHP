<?php 
/* 1. Crea el código PHP que dé respuesta al siguiente planteamiento: 
a) Define las variables $tipo, $peso, $altura y $marca. Establece que el tipo sea “Silla de oficina”, el peso 7.5, la altura 1.1 y la marca “ComfortChair”. 
b) Comprobar si la altura es superior a 1.5 debe mostrarse por pantalla el mensaje “La silla es para una persona alta”. Si es menor o igual a 1.5 debe mostrarse por pantalla el mensaje “La silla es para una persona de estatura promedio”. En otro caso, debe mostrarse “No existe una altura válida para la silla”. 
 */
echo "<strong>Ejercicio 1</strong><br>";

    //Defininmos variables
    $tipo = "Silla de Oficina";
    $peso = 7.5;
    $altura = 1.1;
    $marca = "ComfortChair";

    if($altura > 1.5){
        echo "La silla es para una persona alta" . "<br>";
    }elseif ($altura<=1.5) {
        echo "La silla es para una persona de estatura promedio" . "<br>";
    }else{
        echo "No existe una altura valida para la silla" . "<br>";
    }
    echo "<br>";

/* 2. Crea el código PHP que dé respuesta al siguiente planteamiento: 
a) Que cuente desde 80 hasta 70. 
b) Que a partir de una variable que toma valores de 5 a 10, muestre por pantalla el triple del valor que ha tomado.
 */
echo "<strong>Ejercicio 2</strong><br>";

// a) Contar desde 80 hasta 70
    for ($i = 80; $i >= 70; $i--) {
        echo $i . "<br>";
    }

    $numero = rand(5,10);

    echo "El numero es ".$numero . "<br>";
    echo "El numero multiplicado por 3 es ". ($numero * 3) . "<br>";
    echo "<br>";

/* 
3. Crear el código PHP que dé respuesta al siguiente planteamiento: 
a) Reciba como parámetros el valor del radio de la base y la altura de un cilindro.
b) Devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = número Pi * radio * radio * Altura.
       Siendo número Pi = 3.1416.
 */
echo "<strong>Ejercicio 3</strong><br>";

    //es una funcion entonces retorna siempre el return ayoub
    function calcularVolumenCilindro($radio, $altura){
        $pi = 3.1416;
        $volumen = $pi * $radio * $radio * $altura; 
        return $volumen;
    }

    //Ejemplo
    $radio = 3;
    $altura = 5;

    echo "El volumen del cilindro es igual a ". calcularVolumenCilindro($radio,$altura) . "<br>"; 
    echo "<br>";
/* 4. Crea el código PHP que dé respuesta al siguiente planteamiento: 
Queremos almacenar el número de empleados en diferentes departamentos de una empresa, ordenados en función del departamento y del tipo de trabajo. Tendremos 4 tipos de departamentos (Recursos Humanos, Marketing, Desarrollo y Ventas) y 2 tipos de trabajo (Presencial y Teletrabajo). 
a)	Representa los datos. 
b)	Muestra la información de cantidad de Empleados por Departamento.
 */
    echo "<strong>Ejercicio 4</strong><br>";

    $empleados = [
        "Recursos Humanos" => ["Presencial" => 4, "Teletrabajo" => 3],
        "Marketing" => ["Presencial" => 5, "Teletrabajo" => 9],
        "Desarrollo" =>["Presencial" => 8, "Teletrabajo" => 10],
        "Ventas" =>["Presencial" => 3, "Teletrabajo" => 6]
    ];

    foreach($empleados as $departamento => $tipos){
        echo "Departamento: ". $departamento . "<br>";

        foreach($tipos as $tipo => $cantidad){
            echo $tipo . ": Cantidad de empleados" . $cantidad . "<br>";
        }
        echo "<br>";
    }
    echo "<br>";


    /* 5. Crea el código PHP que dé respuesta al siguiente planteamiento: 
a) Registra las ventas realizadas por una tienda durante los 7 días de la semana. Cada día debe tener importe de ventas, expresado en números enteros (por ejemplo, 200, 450, 300, etc.).
b) Calcula el total de las ventas realizadas durante toda la semana.
c) Muestra un mensaje para cada valor de venta con el siguiente formato:
Si el importe de la venta es mayor o igual a 500, imprime "Gran venta" seguido del valor de la venta.
Si el monto de la venta es menor a 500, imprime "Venta normal" seguido del valor de la venta.
d) Muestra el total de las ventas y un mensaje que indique si la tienda tuvo una semana de "éxito" o "baja". La tienda tendrá una semana de "éxito" si el total de las ventas es mayor o igual a 3000. Si el total es menor a 3000, la tienda tendrá una semana de "baja".
Nota: Para realizar el ejercicio debes utilizar: Sentencias condicionales, Bucles, Arrays y funciones.

 */
echo "<strong>Ejercicio 5</strong><br>";


    $ventasWeek = [200,450,300,550,600,800,150];

    

    function calcularVentas($ventasWeek){
        $total=0;
        foreach($ventasWeek as $ventaWeek){
            $total+=$ventaWeek;
        }

        return $total;
    }

    foreach($ventasWeek as $ventaWeek){
        if($ventaWeek >= 500){
            echo "Gran venta: " . $ventaWeek;
        }else{
            echo "Venta Normal: " . $ventaWeek;
        }
        echo "<br>";
    }

    $totalVentas = calcularVentas($ventasWeek);

    echo "El total de las ventas semanales ha sido de " .$totalVentas . "<br>";

    if($totalVentas >= 3000){
        echo "Semana de Exito";
    }else{
        echo "Semana Baja";
    }

?>