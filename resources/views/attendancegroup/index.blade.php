@extends('layouts.app')


@section("content")


<div class="container">
<table class="table table-striped">
    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Description</th>
        <th> Difficulty</th>
        <th> Schools ID </th>
        <th> Actions </th>
    </tr>

    @foreach ( $attendancegroups as $attendancegroup)
        <tr>
            <td> {{$attendancegroup->id}}</td>
            <td> {{$attendancegroup->name}}</td>
            <td> {{$attendancegroup->description}}</td>
            <td> {{$attendancegroup->difficulty}}</td>
            <td> {{$attendancegroup->school_id}}</td>
            <td><a class="btn btn-primary" href="{{route('attendancegroup.show',[$attendancegroup])}}">Show</a>
                <a class="btn btn-secondary" href="{{route('attendancegroup.edit',[$attendancegroup])}}">Edit</a>
                <form method="POST" action="{{ route('attendancegroup.destroy',[$attendancegroup]) }}">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
        </tr>
    @endforeach
</table>
</div>

@endsection
