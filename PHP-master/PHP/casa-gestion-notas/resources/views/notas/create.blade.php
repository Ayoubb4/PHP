<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Notas</h1>

    <form action=" {{ route('notas.store') }} " method='POST'>
        @csrf
        Nombre <input type="text" name="nombre" id="nombre">
        Asignatura <input type="text" name="asignatura" id="asignatura">
        Nota <input type="text" name="nota" id="nota">

        <button type="submit">Guardar Nota</button>
    </form>
</body>
</html>