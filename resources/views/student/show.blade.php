@extends('layouts.app')

@section("content")
    <div class="container">

        <h2>{{$student->id}}. {{$student->name}} {{$student->surname}}</h2>
        <p>Group id: {{$student->group_id}}</p>
        <img src="{{$student->image_url}}" alt="{{$student->name}}" style="width:auto">
    </div>
@endsection
