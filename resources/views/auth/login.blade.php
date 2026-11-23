@extends('layouts.app')

@section('content')
<p class="eyebrow">Authentication</p><h1>Sign in</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        <label><input type="checkbox" name="remember" value="1" style="width:auto"> Remember me</label>
        <div class="actions"><button class="button" type="submit">Sign in</button><a class="button secondary" href="{{ route('register') }}">Register</a></div>
    </form>
</div>
@endsection
