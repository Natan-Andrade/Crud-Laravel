@extends('layout.app')


@section('title', 'Notes')

@section('content')
<a href="{{ route('home-index') }}"><i class="fa-solid fa-angle-left"></i></a>
<h2>Your notes</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>23/08/2022</td>
            <td><a href=""><i class="fa-solid fa-feather-pointed"></i>Edit</a></td>
            <td><a href=""><i class="fa-solid fa-eraser"></i>Delete</a></td>
        </tr>
    </tbody>

</table>
@endsection