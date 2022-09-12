@extends('layout.app')


@section('title', 'Notes')

@section('content')
<a href="{{ route('home-index') }}"><i class="fa-solid fa-angle-left"></i></a>

    <div class="container">
        <h2>Edite sua anotação</h2>
        <hr>
        <form action="{{ route('notes-update',['id'=>$notas->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <br>
                    <input type="text" value="{{ $notas->titulo }}" name="titulo" placeholder="Lorem Ipsum...">
                </div>
                <br>
                <div class="form-group">
                    <label for="conteudo">Conteudo:</label>
                    <br>
                    <textarea name="conteudo">{{ $notas->conteudo }}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
@endsection