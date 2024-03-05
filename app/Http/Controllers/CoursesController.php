<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::paginate();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function view(Course $course)
    {
        return view('courses.view', compact('course'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course = Course::create($request->all());

        return redirect()->route('courses.view', $course);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();
        return redirect()->route('courses.view', $course);
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }
}
