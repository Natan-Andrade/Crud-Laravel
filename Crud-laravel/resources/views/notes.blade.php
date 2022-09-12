@extends('layout.app')


@section('title', 'Notes')

@section('content')
<a href="{{ route('home-index') }}"><i class="fa-solid fa-angle-left"></i></a>
<h2>Suas Anotações</h2>
<p class="italic">Clique no título ou no conteúdo para ler uma nota</p>

<table class="table">
    <thead>
        <tr>
            <th id="none" scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Conteúdo</th>
            <th id="none" scope="col">Criado em</th>
            <th id="none" scope="col">Atualizado em</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($notas as $nota)
            <tr>
                <th id="none" scope="row">{{ $nota->id }}</th>
                <td><a class="italic" href="{{ route('notes-read',['id'=>$nota->id]) }}">{{ substr(strip_tags($nota->titulo),0,20).'...'; }}</a></td>
                <td><a class="italic" href="{{ route('notes-read',['id'=>$nota->id]) }}">{{ substr(strip_tags($nota->conteudo),0,20).'...'; }}</a></td>
                <td id="none" >{{ $nota->created_at }}</td>
                <td id="none">{{ $nota->updated_at }}</td>
                <td><a href="{{ route('notes-edit',['id'=>$nota->id]) }}"><button><i class="fa-solid fa-feather-pointed"></i>Editar</button></a></td>
                <td>
                    <form action="{{ route('notes-destroy',['id'=>$nota->id]) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button type="submit"><i class="fa-solid fa-eraser"></i></i>Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

<a style="font-size:20px" href="{{ route('notes-create') }}">
    <i class="fa-solid fa-plus"></i>
    Nova Anotação
</a>
@endsection