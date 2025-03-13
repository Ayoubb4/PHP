<div>
    <h3>Tarea</h3>
    <p>{{ $title }}</p>
    <p>{{ $description }}</p>
    <p><strong>Estado:</strong>{{ $completed ? 'Completada' : 'Pendiente' }}</p>
    <div>
        {{ $slot }}
    </div>
</div>

<!-- @if ($completed) 
    'Completada'
    @else
    'Pendiente'
    @endif -->
    
    