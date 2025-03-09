<button class="btn btn-primary"><!-- CLASS ES PARA DARLE FORMATO -->
    {{ $slot }}
</button>

<button {{ $attributes->merge(['class' => 'btn btn-primary']) }}></button>