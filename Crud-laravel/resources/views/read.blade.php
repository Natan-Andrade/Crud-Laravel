@extends('layout.app')


@section('title', 'Notes')

@section('content')
<a href="{{ route('notes-index') }}"><i class="fa-solid fa-angle-left"></i></a>

    <div class="container">
        <h2>{{ $notas->titulo }}</h2>
        <hr>
        <p>{{ $notas->conteudo }}</p>
        <hr>
        <p>{{ $notas->created_at }}</p>
    </div>
@endsection