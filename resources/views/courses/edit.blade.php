@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>ویرایش دوره</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">عنوان دوره</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">توضیحات</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $course->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">ویرایش دوره</button>
        </form>
    </div>
@endsection
