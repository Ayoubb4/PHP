<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" {{route('notas.store')}} " method="POST" >
        @csrf

        Nombre: <input type="text" name="nombre" id="nombre">
        Asignatura: <input type="text" name="asignatura" id="asignatura">
        Nota: <input type="text" name="nota" id="nota">

        <input type="submit" value="Guardar Nota">
    </form>
</body>
</html>