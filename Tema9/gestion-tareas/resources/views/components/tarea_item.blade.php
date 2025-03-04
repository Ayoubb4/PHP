<div>
    <h3>Tarea</h3>
    <p>{{ $title }}</p>
    <p>{{ $description }}</p>
    <p><strong>Estado:</strong>{{ $completed ? 'Completada' : 'Pendiente' }}</p>
</div>

<!-- @if ($completada) 
    'Completada'
    @else
    'Pendiente'
    @endif -->
    
    