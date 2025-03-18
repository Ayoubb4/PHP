<h1>Agregar Nueva Nota</h1>

<form action="{{ route('notas.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre del Alumno:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="asignatura">Asignatura:</label>
    <input type="text" name="asignatura" id="asignatura" required>

    <label for="nota">Nota:</label>
    <input type="number" step="0.1" name="nota" id="nota" required>

    <button type="submit">Guardar Nota</button>
</form>

<a href="{{ route('notas.index') }}">Volver a Notas</a>
