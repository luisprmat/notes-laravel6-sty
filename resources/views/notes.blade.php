@extends('layout')

@section('title', 'Listado de notas')

@section('content')
    <main class="content">
        <div id="main-notes" class="cards">
            @forelse ($notes as $note)
                <div id="note-{{ $note->id }}" class="card card-small">
                    <div class="card-body">
                        <h4>{{ $note->title }}</h4>

                        <p>
                            {!! $note->content !!} {{-- @todo: Purify HTML or use Markdown instead --}}
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notes.edit', $note) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a href="#" class="action-link action-delete"
                            onclick="event.preventDefault(); deleteNote('{{ $note->id }}')"
                        >
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            @empty
                <p>No hay notas disponibles en este momento <a href="{{ route('notes.create') }}">Agrega una?</a></p>
            @endforelse
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
