@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>ایجاد دوره جدید</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">عنوان دوره</label>
                <input type="text" class="form-control" id="title" value="{{ old('title') }}" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">توضیحات</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">ایجاد دوره</button>
        </form>
    </div>
@endsection
