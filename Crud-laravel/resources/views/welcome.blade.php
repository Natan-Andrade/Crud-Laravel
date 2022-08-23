@extends('layout.app')


@section('title', 'Notepad')

    @section('content')
        <h1 class="text-center">NOTEPAD</h1>

        <div class="links">
            <a href="{{ route('notes-index') }}">
                <i class="fa-solid fa-feather-pointed"></i>
                Create note
            </a>
            <a href="#">
                <i class="fa-solid fa-book-open"></i>
                My notes
            </a>
        </div><!--link-->
    @endsection