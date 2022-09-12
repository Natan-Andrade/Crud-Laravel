@extends('layout.app')


@section('title', 'Notes')

@section('content')
<a href="{{ route('home-index') }}"><i class="fa-solid fa-angle-left"></i></a>

    <div class="container">
        <h2>Crie sua anotação</h2>
        <hr>
        <form action="{{ route('notes-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <br>
                    <input type="text" name="titulo" placeholder="Lorem Ipsum..." required>
                </div>
                <br>
                <div class="form-group">
                    <label for="conteudo">Conteudo:</label>
                    <br>
                    <textarea name="conteudo" placeholder="Lorem Ipsum..." required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit">
                </div>
            </div>
        </form>
    </div>
@endsection