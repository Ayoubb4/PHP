<h1>Detalles de la Nota</h1>

<strong>Nombre:</strong> {{ $nota->nombre }}<br>
<strong>Asignatura:</strong> {{ $nota->asignatura }}<br>
<strong>Nota:</strong> {{ $nota->nota }}<br>
<strong>Estado:</strong> {{ $nota->estado }}<br>

<a href="{{ route('notas.index') }}">Volver a Notas</a>