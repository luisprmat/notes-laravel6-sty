@extends('layout')

@section('title', 'Actualizar nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Editar nota</h1>

                    @include('shared._errors')

                    <form method="POST" action="{{ route('notes.update', $note) }}">
                        @method('PUT')
                        @include('_fields')

                        <button type="submit" class="btn btn-primary">Actualizar nota</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
