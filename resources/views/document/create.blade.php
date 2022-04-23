@extends('layout.app')

@section('content')
    <h1>Créer votre documentation</h1>

    <form action="{{ route("doc.store") }}" method="post" id="form_create_doc">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                   value="{{ old('title') }}">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea name="content" id="content" required style="height: auto; min-height: 200px; font-size: 16px;">
                {{ old('content') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection

