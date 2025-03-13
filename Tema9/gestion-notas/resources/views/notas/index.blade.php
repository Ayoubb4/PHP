<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Notas</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

{{-- Mensaje si no hay notas registradas --}}
@if($notas->isEmpty())
    <x-mensaje-advertencia>
        No hay notas registradas.
    </x-mensaje-advertencia>
@endif

{{-- Mostrar las notas --}}
@foreach ($notas as $nota)
    <x-nota-item 
        :nombre="$nota->nombre" 
        :asignatura="$nota->asignatura" 
        :nota="$nota->nota" 
        :estado="$nota->estado"
    >
        {{-- Enlace para ver los detalles de la nota --}}
        <a href="{{ route('notas.show', $nota->id) }}">Ver detalles</a>
        <br>
        {{-- Formulario de eliminación --}}
        <form action="{{ route('notas.destroy', $nota->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta nota?')">Eliminar</button>
        </form>
       
    </x-nota-item>
@endforeach

<a href="{{ route('notas.create') }}">Agregar Nueva Nota</a>

</body>
</html>

