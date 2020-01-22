@if ($errors->any())
    <div class="errors">
        <p><strong>Por favor corrige los siguientes errores:</strong></p>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
