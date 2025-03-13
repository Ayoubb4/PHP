<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Blade</title>
</head>
<body>
    <h1>Hey</h1>

    <x-message tipo="Laravel" mensaje="Este es un framework de PHP"/>
    <x-message tipo="Componentes" mensaje="Nos ayudan a reutilizar código"/>
    <!-- valor de slot -->
        <x-message tipo="Atencion" mensaje="Este mensaje es importante">
            <button> Más información</button> 
        </x-message>
    <!-- fin valor slot -->
     <!-- Boton -->
    <x-boton>Enviar</x-boton>
    <x-boton>Cancelar</x-boton>
    <x-boton></x-boton>
    <!-- fin Boton -->

    <!-- Comment -->
    <x-comment autor="Pedro Romero" descripcion="Este es un comentario de prueba." fecha="25/02/2025" />
     <!-- Fin Comment -->
    <!-- Navegacion -->
    <x-navegacion inicio="INICIO" localizacion="Barcelona" contacto="sisi@sisi.com"/>
    <!-- Fin Navegacion -->

    <!-- tarjeta -->
    <x-tarjeta localizacion="MADRID" contacto="lolo@lolo.com">
        <p>Aqui se ubica el slot</p>
    </x-tarjeta>
     <!-- Fin Tarjeta -->

    <!-- Usuario -->
     <h2>Usuario</h2>
        <x-usuario nombre="Pedro Juarez" email="sisi@sisi.com"/>
    <!-- Fin Usuario -->
</body>
</html>
