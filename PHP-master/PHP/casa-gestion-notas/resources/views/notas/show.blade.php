<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalles de Nota</h1>

    <x-nota-item :nombre="$nota->nombre" :asignatura="$nota->asignatura" :nota="$nota->nota" :estado="$nota->estado">
        <a href=" {{ route('notas.index') }} ">Volver al listado de Notas</a>
    </x-nota-item>
</body>
</html>