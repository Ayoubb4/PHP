<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->


    @if(isEmpty("notas.store")) <!--no tiene sentido-->
        {{ $slot }}
    @endif
</div>