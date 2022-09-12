@extends('layout.app')


@section('title', 'Notepad')

    @section('content')
        <h1 class="text-center">NOTEPAD</h1>

        <div class="links">
            <a href="{{ route('notes-create') }}">
                <i class="fa-solid fa-feather-pointed"></i>
                Criar Nota
            </a>
            <a href="{{ route('notes-index') }}">
                <i class="fa-solid fa-book-open"></i>
                Minhas Anotações
            </a>
        </div><!--link-->
    @endsection