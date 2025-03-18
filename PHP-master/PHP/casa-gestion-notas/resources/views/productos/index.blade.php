<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($productos->isEmpty())
        <x-mensaje-producto>No hay productos registrados</x-mensaje-producto>
    @else
        @foreach($productos as $producto)
            <x-producto-item :nombre="$producto->nombre" :precio="$producto->precio" :caducidad="$producto->caducidad">
                @if($producto->caducado)
                    <p>Producto caducado</p>
                @endif
                    <a href="{{ route('productos.edit', $producto->id) }}">Deseas cambiar el precio?</a>
                <form action="{{ route('productos.delete', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return confirm('Quieres eliminar este producto?')">Eliminar</button>
                </form>
            </x-producto-item>
        @endforeach

    @endif

    <a href="{{ route('productos.create') }}">Crear Producto</a>
</body>
</html>