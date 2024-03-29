@extends('layouts.template')
@section('title', 'Courses create')

@section('content')
    <h1>Creating a new course</h1>
    <a href={{ route('courses.index') }}>Go back</a>
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        <label>
            Name
            <br>
            <input type="text" name="name" value="{{ old('name') }}" />
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
            <textarea name="description" rows="3">
                {{ old('description') }}
            </textarea>
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
            <input type="text" name="category" value="{{ old('category') }}" />
        </label>

        @error('category')
            <br>
            <label> {{ $message }} </label>
            <br>
        @enderror
        <br>
        <button type="submit">Create new course</button>
    </form>
@endsection
