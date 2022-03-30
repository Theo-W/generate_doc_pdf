@extends('pdf.app')

@section('content')

    <div>
        <button onclick="generatePDF()">Download</button>
    </div>

    <h1>{{ $doc->title }}</h1>

    <div id="element" class="container my-2 p-4">
        <p>{!!$doc->content !!}</p>
    </div>
@endsection
