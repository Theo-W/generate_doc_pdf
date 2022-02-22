@extends('layout.app')

@section('content')
    <h1>Crée notre documentation</h1>

    <form action="{{ route("create_doc_store") }}" method="post" id="form_create_doc">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea name="content" id="content" style="height: auto; min-height: 200px; font-size: 16px;">
                {{ old('content') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crée</button>
    </form>
@endsection

