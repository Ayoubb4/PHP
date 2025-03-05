
    <div style="border: 1px solid #ccc; padding: 10px; margin: 5px;">
        <h3>{{ $titulo }}</h3>
        <p>{{ $descripcion }}</p>
        <p><strong>Estado:</strong> {{ $completada ? 'Completada' : 'Pendiente' }}</p>
        <div>
            {{ $slot }}
        </div>
    </div>