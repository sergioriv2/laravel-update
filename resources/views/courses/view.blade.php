@extends('layouts.template')
@section('title', $course->name . ' course')

@section('content')
    <h1>Welcome to the course: {{ $course->name }} </h1>
    <hr>
    <a href={{ route('courses.edit', $course->id) }}>Edit</a>
    <p>Category: {{ $course->category }}</p>
    <p> {{ $course->description }} </p>
    <a href={{ route('courses.index') }}>Go back</a>
@endsection
