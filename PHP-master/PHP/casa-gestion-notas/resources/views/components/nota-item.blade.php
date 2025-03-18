<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
     <div class ="nota-item">
        <h2>Nombre {{ $nombre }} </h2>
        <p>Asignatura: {{ $asignatura }} </p>
        <p>Nota: {{ $nota }} </p>
        <p>Estado: {{ $estado }} </p>
        <div> {{ $slot }} </div>
     </div>
</div>