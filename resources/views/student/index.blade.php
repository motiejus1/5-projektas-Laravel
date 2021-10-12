
@extends('layouts.app')


@section("content")
<div class="container">

    <a class="btn btn-primary" href="{{route('student.create')}}">Create Student</a>
    <table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Group ID</th>
        <th> Actions </th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->group_id}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('student.show',[$student])}}">Show</a>
                <a class="btn btn-secondary" href="{{route('student.edit',[$student])}}">Edit</a>
                <form method="POST" action="{{ route('student.destroy',[$student]) }}">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            {{-- <td><img src="{{$student->image_url}}" alt="{{$student->name}}" /></td> --}}
        </tr>
    @endforeach

    </table>
</div>

@endsection
