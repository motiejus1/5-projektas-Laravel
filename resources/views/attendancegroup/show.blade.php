@extends('layouts.app')

@section("content")
    <div class="container">

        <h2>{{$attendancegroup->id}}. {{$attendancegroup->name}}</h2>
        <p>{{$attendancegroup->description}}</p>
        <p>{{$attendancegroup->difficulty}}</p>
        <p>School id: {{$attendancegroup->school_id}}</p>
    </div>
@endsection
