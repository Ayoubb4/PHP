<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tareas Index</title>
</head>
<body>
    <h1>Gestion Tareas</h1>

    <x-tarea_item :title="$tareas->title" :description="$tareas->description" :completed="$tareas->completed" />
    
</body>
</html>