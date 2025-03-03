<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="/procesar" method="post">
        <!-- Siempre en formularios el @csrf -->
        @csrf 
        <label for="name">Nombre</label>
        <input type="text" name="nombre">

        <label for="email">Email</label>
        <input type="email" name="email">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
