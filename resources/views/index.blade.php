@extends('layouts.app')

@section('content')
    <div class="card p-4">
        @auth
            <h3 class="text-center">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} به پلتفرم آموزشی خوش آمدید.</h3>
        @endauth
        @guest
            <h3 class="text-center">به پلتفرم آموزشی خوش آمدید.</h3>
        @endguest
    </div>
@endsection
