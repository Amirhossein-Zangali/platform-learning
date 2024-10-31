<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function dashboard()
    {
        $courses = auth()->user()->courses;
        return view('dashboard', compact('courses'));
    }
}
