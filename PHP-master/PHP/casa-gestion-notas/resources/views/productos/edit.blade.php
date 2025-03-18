<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="precio">Nuevo Precio</label>
            <input type="number" step="0.01" name="precio" id="precio">
        </div>

        <button type="submit">Actualizar Precio</button>
    </form>

    <a href="{{ route('productos.index') }}">Volver al listado de productos</a>
</body>
</html>