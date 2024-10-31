@extends('layouts.app')
@php use App\Models\Course, App\Models\User @endphp
@section('content')
    <div class="container">
        <h2 class="text-center">{{ $course->title }}</h2>
        <p class="text-center">{{ $course->description }}</p>
        @if(!Course::isUserCourse($course->id))
            <p class="text-center">نویسنده : {{ User::getFullName($course->user->id) }}</p>
        @endif
        @if(Course::isUserCourse($course->id))
            <a href="{{ route('courses.edit', $course->id) }}" class="text-center btn btn-primary w-100 mb-2">ویرایش</a>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-center w-100">حذف</button>
            </form>
        @elseif(Course::isEnroll($course->id))
            <div class="alert alert-success text-center">
                شما در این دوره ثبت نام کرده‌اید.
            </div>
        @else
            <form action="{{ route('courses.enroll', $course->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success text-center w-100">ثبت نام در دوره</button>
            </form>
        @endif
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
