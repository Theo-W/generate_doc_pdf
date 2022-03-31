@extends('layout.app')

@section('style')
    <style>
        .hljs {
            padding: 2em !important;
            border-radius: 5px;
        }

        table {
            width: 100% !important;
            border-collapse: collapse !important;
            display: table !important;
        }

        table td {
            min-width: 2em;
            padding: 16px 8px;
            border: 1px solid #B3B3B3FF;
        }

        .image {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center container my-2 p4">
            <a href="{{ route('home') }}" class="btn btn-icon"><i class="bi bi-chevron-left"></i></a>
            <button id="onClickGeneratePDF" class="btn btn-primary"><i
                    class="bi bi-file-earmark-pdf"></i> Download</button>
        </div>

        <div id="element" class="container my-2 p-3">
            <p>{!! $doc->content !!}</p>
        </div>
    </div>
@endsection
