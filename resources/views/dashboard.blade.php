@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h3 class="text-center">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} به داشبورد پلتفرم
            آموزشی خوش آمدید.</h3>
    </div>

    @if(session('info'))
        <div class="alert alert-info mt-3">
            {{ session('info') }}
        </div>
    @endif

    <div class="card p-4 my-2">
        <a class="btn btn-primary w-100 text-center" href="{{ route('courses.create') }}">ایجاد دوره +</a>
    </div>
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

@endsection
