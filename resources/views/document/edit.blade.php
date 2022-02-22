@extends('layout.app')

@section('content')
    <h1>Modfier {{ $doc->title }}</h1>

    <form action="{{ route('edit_doc_update', ['id' => $doc->id]) }}" method="post" id="form_create_doc">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $doc->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea id="content" name="content" style="height: auto; min-height: 200px; font-size: 16px;">
                {{ $doc->content }}
            </textarea>
            {{ $doc->content }}
        </div>
        <button type="submit" class="btn btn-primary">Crée</button>
    </form>
@endsection
