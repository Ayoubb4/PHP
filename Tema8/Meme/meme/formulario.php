<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu meme</title>
</head>
<body>
    
    <h1>Crea tu propio meme</h1>

    <form action="meme.php">

    <h2>Introduce una imagen</h2>
    <label for="imagen">Imagen</label>
    <input type="file" id="imagen" name="imagen" placeholder="Introduce una imagen...">

    <h2>Introduce el texto de la parte superior</h2>
    <label for="texto">Texto de arriba</label>
    <input type="text" id="texto" name="texto" placeholder="Introduce un texto en la parte superior...">

    <h2>Introduce el texto de la parte inferior</h2>
    <label for="texto1">Texto de abajo</label>
    <input type="text" id="texto1" name="texto1" placeholder="Introduce un texto en la parte abajo...">

    <br><br><br>
    <button type="submit">Enviar</button>
    </form>

</body>
</html>