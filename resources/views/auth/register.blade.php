@extends('layouts.app')

@section('title', 'ثبت نام در سایت')

@section('content')
    <div class="card p-4">
        <h2>ثبت نام در سایت</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('registerPost') }}">
            @csrf
            <div class="form-group">
                <label class="my-2" for="first_name">نام</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label class="my-2" for="last_name">نام خانوادگی</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <label class="my-2" for="email">ایمیل</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label class="my-2" for="phone">تلفن</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label class="my-2" for="password">رمز عبور</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">ثبت نام</button>
        </form>
    </div>
@endsection
