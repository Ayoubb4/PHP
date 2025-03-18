<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Alumnos</title>
</head>
<body>
    <h2>Gestión de Alumnos</h2>

    <!-- Formulario para Insertar un Alumno (POST) -->
    <h3>Agregar Usuario</h3>
    <form action="index.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Agregar</button>
    </form>

    <hr>

    <!-- Formulario para Actualizar un Alumno (PUT) -->
    <h3>Actualizar Usuario</h3>
    <form action="put.php" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <label>ID:</label>
        <input type="text" name="id" required><br>
        <label>Nuevo Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Nuevo Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Actualizar</button>
    </form>

    <hr>

    <!-- Formulario para Eliminar un Alumno (DELETE) -->
    <h3>Eliminar Usuario</h3>
    <form action="delete.php" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <label>ID:</label>
        <input type="text" name="id" required><br>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
