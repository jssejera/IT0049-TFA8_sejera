@extends('layouts.app')

@section('content')
<p class="eyebrow">Authentication</p><h1>Create account</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="username">Username</label><input id="username" name="username" value="{{ old('username') }}" required>
        <label for="full_name">Full name</label><input id="full_name" name="full_name" value="{{ old('full_name') }}" required>
        <label for="email">Email address</label><input id="email" type="email" name="email" value="{{ old('email') }}" required>
        <label for="password">Password</label><input id="password" type="password" name="password" required minlength="8">
        <label for="password_confirmation">Confirm password</label><input id="password_confirmation" type="password" name="password_confirmation" required minlength="8">
        <div class="actions"><button class="button" type="submit">Register</button><a class="button secondary" href="{{ route('login') }}">Sign in</a></div>
    </form>
</div>
@endsection
