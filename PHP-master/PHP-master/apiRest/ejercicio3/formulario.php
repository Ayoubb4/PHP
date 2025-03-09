<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de empleados</title>
</head>
<body>

<h2>Agregar Empleado</h2>
<form action="index.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit">Agregar</button>
</form>

<h2>Actualizar Empleado</h2>
<form action="put.php" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="number" name="id" placeholder="ID del Empleado" required>
    <input type="text" name="nombre" placeholder="Nuevo Nombre" required>
    <input type="email" name="email" placeholder="Nuevo Email" required>
    <input type="text" name="telefono" placeholder="Nuevo Teléfono" required>
    <button type="submit">Actualizar</button>
</form>

<h2>Eliminar Empleado</h2>
<form action="delete.php" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="number" name="id" placeholder="ID del Empleado" required>
    <button type="submit">Eliminar</button>
</form>

</body>
</html>
