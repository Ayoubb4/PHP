<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Create</title>
</head>
<body>
    <h2>Agregar Nueva Nota</h2>
    
    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del alumno</label>
            <input type="text" name="nombre" id="nombre">
        <label for="asignatura">Asignatura</label>
            <input type="text" name="asignatura" id="asignatura">
        <label for="nota">Nota</label>
            <input type="text" name="nota" id="nota">

        <button type="submit">Guardar Nota</button>
    </form>
</body>
</html>