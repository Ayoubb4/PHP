<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Detalles</title>
</head>
<body>
    
    <h2>Detalles de la Nota</h2>

    <x-nota-item :nombre="$nota->nombre" :asignatura="$nota->asignatura" :nota="$nota->nota" :estado="$nota->estado">
        <a href="{{ route('notas.index') }}">Volver a la lista de notas</a>
    </x-nota-item>

</body>
</html>
