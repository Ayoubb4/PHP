<?php 
/* Ejercicio 1
Declara las variables $producto, $peso, $altura y $fabricante.

El $producto debe ser "Mesa de escritorio".
El $peso debe ser 15.3 kg.
La $altura debe ser 1.2 metros.
El $fabricante debe ser "WorkTable".
Según la altura, muestra:
"La mesa es para una persona alta" si la altura es superior a 1.4 metros.
"La mesa es para una persona de estatura promedio" si la altura es menor o igual a 1.4 metros.
"No existe una altura válida para la mesa" en cualquier otro caso. */

$producto = "Mesa de escritorio";
$peso = 15.3;
$altura = 1.2;
$fabricante = "WorkTable";

if($altura > 1.4){
    echo "La mesa es para una persona alta";
}elseif($altura <= 1.4){
    echo "La mesa es para una persona de estatura promedio";
}else{
    echo "No existe una altura valida para la mesa";
}

/* Ejercicio 2
Muestra por pantalla los números del 60 al 50 en orden descendente.
A partir de una variable que toma valores entre 3 y 8, muestra el doble de su valor. */

for($i=60; $i>=50; $i--){
    echo $i ."<br>";
}

$numero = rand(3,8);
echo "El numero aleatorio es: " . $numero . "<br>";
echo "El doble de este es: " . ($numero * 2) . "<br>";


/* Crea una función que reciba el radio de la base y la altura de un cilindro y devuelva su área lateral. La fórmula es: Area lateral=2×π×radio×altura
Considera que π = 3.1416.
*/

function calcularAreaCilindro($altura, $radio){
    $pi = 3.1416;
    $resultado = 2 * $pi * $radio * $altura;
    return $resultado;
}
$altura = 5;
$radio = 3;
echo "El resultado del area es: " . calcularAreaCilindro($altura,$radio) . "<br>". "<br>";

/* Ejercicio 4
Almacena en un array la cantidad de empleados en diferentes departamentos de una empresa:

Administración, Finanzas, Soporte Técnico, Producción.
Cada departamento tiene empleados en Modalidad Remota y Presencial.
Muestra la cantidad de empleados por cada departamento. */

$empleados =[
    "Administracion" => ["Remota"=>5, "Presencial"=>3],
    "Finanzas"=>["Remota"=>9,"Presencial"=>6],
    "Soporte Tecnico"=>["Remota"=>5,"Presencial"=>3],
    "Produccion"=>["Remota"=>6,"Presencial"=>3]
];

foreach($empleados as $departamento =>$modalidades){
    echo "El departamento es:" . $departamento . "<br>";
        foreach($modalidades as $modalidad => $cantidad){
            echo "La modalidad es: " . $modalidad . " Empleados: ". $cantidad . "<br>";
        }
    echo "<br>";
}

/* Ejercicio 5
Registra las ventas de una tienda durante 5 días (valores enteros).

Calcula el total de las ventas de la semana.
Muestra un mensaje según el importe:
Si la venta es mayor o igual a 400: "Venta exitosa".
Si la venta es menor a 400: "Venta estándar".
Muestra si la semana fue "buena" (ventas totales >= 2000) o "mala" (ventas totales < 2000). */

$ventas = [500,300,777,200,10];

    function calcularVentas($ventas){
        $totalVentas=0;
        foreach($ventas as $venta){
            $totalVentas += $venta;
        }
        return $totalVentas;
    }
    echo "<br>";

    foreach($ventas as $venta){
        if($venta>=400){
            echo "Venta Exitosa";
        }else{
            echo "Venta normal";
        }
        echo "<br>";
    }
    $totalVentas = calcularVentas($ventas);

    echo "El total es de: " . $totalVentas . "<br>";

    if($totalVentas >= 2000){
        echo "semana muy buena". "<br>";
    }else{
        echo "semana muy tranquila" . "<br>";
    }





?>