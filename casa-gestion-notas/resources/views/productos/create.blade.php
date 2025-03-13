<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        Nombre: <input type="text" name="nombre" id="nombre">
        Precio: <input type="number" step="0.01" name="precio" id="precio">
        Caducidad: <input type="date" name="caducidad" id="caducidad">
        <button type="submit">Crear Producto</button>
    </form>


    <a href="{{ route('productos.index') }}">Volver al listado de productos</a>

</body>
</html>