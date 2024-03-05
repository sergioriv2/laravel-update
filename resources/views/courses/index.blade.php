@extends('layouts.template')
@section('title', 'Courses')

@section('content')
    <h1>Welcome to the courses main view</h1>

    <a href={{ route('courses.create') }}>Create a new course</a>

    <ul>
        @foreach ($courses as $courseDetails)
            <li>
                <a href={{ route('courses.view', $courseDetails->id) }}>{{ $courseDetails->name }} </a>
            </li>
        @endforeach
    </ul>

    {{ $courses->links() }}
@endsection
