
@extends('layouts.app')


@section("content")
<div class="container">
    <table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Group ID</th>
        <th>Image</th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->id}}</td>
            <td><img src="{{$student->image_url}}" alt="{{$student->name}}" /></td>
        </tr>
    @endforeach

    </table>
</div>

@endsection
