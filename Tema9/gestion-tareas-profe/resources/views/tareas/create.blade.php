<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Tarea</title>
</head>
<body>
    <h1>Agregar Nueva Tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>