<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
</head>
<body>
    <h2>Gestión de Productos</h2>

    <!-- Formulario para Insertar un Producto (POST) -->
    <h3>Agregar Producto</h3>
    <form action="index.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion"></textarea><br>
        <button type="submit">Agregar</button>
    </form>

    <hr>

    <!-- Formulario para Actualizar un Producto (PUT) -->
    <h3>Actualizar Producto</h3>
    <form action="put.php" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <label>ID:</label>
        <input type="text" name="id" required><br>
        <label>Nuevo Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Nuevo Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label>Nueva Descripción:</label>
        <textarea name="descripcion"></textarea><br>
        <button type="submit">Actualizar</button>
    </form>

    <hr>

    <!-- Formulario para Eliminar un Producto (DELETE) -->
    <h3>Eliminar Producto</h3>
    <form action="delete.php" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <label>ID:</label>
        <input type="text" name="id" required><br>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
