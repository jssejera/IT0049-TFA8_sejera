@extends('layouts.app')

@section('content')
<p class="eyebrow">User account #{{ $user->id }}</p><h1>{{ $user->full_name }}</h1>
<div class="form-card"><p><strong>Username:</strong> {{ $user->username }}</p><p><strong>Email:</strong> {{ $user->email }}</p><div class="actions"><a class="button" href="{{ route('users.edit', $user) }}">Edit user</a><a class="button secondary" href="{{ route('users.index') }}">Back</a></div></div>
@endsection
