@extends('layout')

@section('title', 'Listado de notas')

@section('content')
    <main class="content">
        <div class="cards">
            @forelse ($notes as $note)
                <div class="card card-small">
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
                            onclick="event.preventDefault(); document.getElementById('delete-button-{{ $note->id }}').submit();"
                        >
                            <i class="icon icon-trash"></i>
                        </a>
                        <form id="delete-button-{{ $note->id }}" action="{{ route('notes.destroy', $note) }}" method="POST" style="display: none;">
                           @method('DELETE')
                           @csrf
                        </form>
                    </footer>
                </div>
            @empty
                <p>No hay notas disponibles en este momento <a href="{{ route('notes.create') }}">Agrega una?</a></p>
            @endforelse
        </div>
    </main>
@endsection
