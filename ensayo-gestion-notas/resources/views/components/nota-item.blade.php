<div>
    <!-- Be present above all else. - Naval Ravikant -->

    <div class = "nota-item">
    <h2>Nombre: {{ $nombre }}</h2>
    <p><strong>Asignatura:</strong> {{$asignatura}} </p>
    <p><strong>Nota:</strong> {{$nota}} </p>
    <p><strong>Estado:</strong>{{$estado}} </p>

    <div>
        {{$slot}}
    </div>

    </div>
</div>