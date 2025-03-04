<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tareas Create</title>
</head>
<body>
    <h1>Gestion Tareas Formulario</h1>

    <form action="{{ route('tareas.store') }}" method="post">
        @csrf

        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" placeholder="titulo">

        <label for="description">Descripcion</label>
        <input type="text" name="description" id="description" placeholder="Descripcion">

    <input type="submit" value="Enviar">
</form>

</body>
</html>