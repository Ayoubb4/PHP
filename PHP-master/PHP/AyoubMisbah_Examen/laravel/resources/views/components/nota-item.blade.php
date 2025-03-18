<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Asignatura:</strong> {{ $asignatura }}</p>
    <p><strong>Nota:</strong> {{ $nota }}</p>
    <p><strong>Estado:</strong> {{ $estado }}</p>

    <div>
        {{ $slot }}
    </div>
    <div>
        {{ $slot }}  <!--repetido, no hace dalta--> 
    </div>
 
</div>