@extends('layouts.app')

@section('title', 'ورود به سایت')

@section('content')
    <div class="card p-4">
        <h2>ورود به سایت</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('loginPost') }}">
            @csrf
            <div class="form-group">
                <label class="my-2" for="email">ایمیل</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div class="form-group">
                <label class="my-2" for="password">رمز عبور</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">ورود</button>
        </form>
    </div>
@endsection
