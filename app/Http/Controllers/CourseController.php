<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::where('user_id', '!=', auth()->id())->orderBy('id', 'desc')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
        Course::create(array_merge($request->all(), ['user_id' => auth()->id()]));

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Course $course ,Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
        $course->update($request->all());

        return redirect()->route('dashboard')->with('info', 'دوره با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('dashboard')->with('info', 'دوره با موفقیت حذف شد.');
    }

    /**
     * Enrollment in course
     */

    public function enroll(Course $course)
    {
        $user = Auth::user();

        $course->enrollments()->create(['user_id' => $user->id]);

        $course->increment('students_count');

        return redirect()->route('courses.show', $course->id);
    }
}
