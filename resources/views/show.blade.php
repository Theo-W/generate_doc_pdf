@extends('layout.app')

@section('content')
    <h1>{{ $doc->title }}</h1>
    <h1>{!!$doc->content !!}</h1>
@endsection
