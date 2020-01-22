@extends('layout')

@section('title', 'Crea una nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Nueva nota</h1>

                    @include('shared._errors')

                    <form method="POST" action="{{ route('notes.store') }}">
                        @include('_fields')

                        <button type="submit" class="btn btn-primary">Crear nota</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
