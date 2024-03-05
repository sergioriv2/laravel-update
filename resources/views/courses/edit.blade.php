@extends('layouts.template')
@section('title', $course->name . ' course')

@section('content')
    <h1>Updating a course</h1>
    <a href={{ route('courses.index') }}>Go back</a>
    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('put')
        <label>
            Name
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}" />
        </label>

        @error('name')
            <br>
            <label> {{ $message }} </label>
            <br>
        @enderror
        <br>

        <label>
            Description
            <br>
            <textarea name="description" rows="3">{{ old('description', $course->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <label> {{ $message }} </label>
            <br>
        @enderror
        <br>

        <label>
            Category
            <br>
            <input type="text" name="category" value="{{ old('category', $course->category) }}" />
        </label>

        @error('category')
            <br>
            <label> {{ $message }} </label>
            <br>
        @enderror
        <br>
        <button type="submit">Update course</button>
    </form>
@endsection
