<?php
/* session_start();

    $_SESSION['carrito'] = [];
    unset($_SESSION['carrito']);

    if (isset($_SESSION['carrito'])) {
        
        $_SESSION['carrito'] = [
            [
                "nombre" => "Pollo",
                "precio" => 10.00,
                "cantidad" => 2
            ],
            [
                "nombre" => "Tomate",
                "precio" => 9.50,
                "cantidad" => 1
            ]
        ];

        echo "El array esta guardado.<br> <br>";
    }

    echo "El carrito es este:<br><br>";

    foreach ($_SESSION['carrito'] as $producto) {

        echo "Nombre: " . $producto['nombre'] . "<br>";
        echo "Precio: $" . number_format($producto['precio'], 2) . "<br>";
        echo "Cantidad: " . $producto['cantidad'] . "<br>";
        echo "<br>";

    }

    session_destroy();
 */

?>

<?php 
    /* Crea un script en PHP que simule el manejo de un carrito de compras utilizando sesiones. El objetivo es realizar las siguientes acciones:

Iniciar una sesión con session_start() y crear una variable de sesión llamada carrito, inicializada como un array vacío.
Eliminar cualquier rastro previo de la variable de sesión carrito utilizando unset().
Si la variable carrito existe, asignarle un array con productos, donde cada producto tenga las claves:
nombre: nombre del producto (por ejemplo, "Pollo", "Tomate").
precio: precio del producto como un número flotante.
cantidad: cantidad del producto como un número entero.
Mostrar un mensaje indicando que el array se ha guardado correctamente.
Recorrer y mostrar los productos del carrito con sus respectivos valores (nombre, precio y cantidad) utilizando un bucle foreach. Formatea los precios a dos decimales.
Al finalizar, destruir la sesión con session_destroy() para eliminar los datos de la sesión. */
session_start();

    $_SESSION["carrito"] = [];
    unset($_SESSION["carrito"]);

    if(isset($_SESSION["carrito"])){

        $_SESSION["carrito"] =
        [
            [
                "nombre" => "Pollo",
                "precio" => 10.0,
                "cantidad" => 2
            ],
            [
                "nombre" => "Tomate",
                "precio" => 5,
                "cantidad" => 2
            ]
        ];

        echo "Eñ carrito se ha guardado correctamente";
    }

    foreach($_SESSION["carrito"] as $producto){
        echo "Nombre" . $productos["nombre"] . "<br>";
        echo "Precio" . number_format($producto["precio"], 2). "<br>";
        echo "Cantidad" . $producto["cantidad"] . "<br>";
    }

    session_destroy();




?>