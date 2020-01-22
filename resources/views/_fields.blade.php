@csrf

<label for="title" class="field-label">Título: </label>
<input type="text" name="title" value="{{ old('title', $note->title) }}" id="title" class="field-input @error('title') field-error @enderror">
@error('title')
    <p class="error-message">{{ $message }}</p>
@enderror

<label for="content" class="field-label">Contenido:</label>
<textarea name="content" id="content" rows="10" class="field-textarea @error('content') field-error @enderror">{{ old('content', $note->content) }}</textarea>
@error('content')
    <p class="error-message">{{ $message }}</p>
@enderror
