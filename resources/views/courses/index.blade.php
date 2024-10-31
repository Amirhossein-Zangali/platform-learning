@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>دوره‌ها</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach($courses as $course)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $course->title }}</h5>
                    <p class="card-text text-center">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary text-center w-100">مشاهده
                        دوره</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
