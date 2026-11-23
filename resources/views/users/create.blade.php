@extends('layouts.app')

@section('content')
<p class="eyebrow">POS user records</p><h1>Add User</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
        @include('users.form')
        <div class="actions"><button class="button" type="submit">Save user</button><a class="button secondary" href="{{ route('users.index') }}">Cancel</a></div>
    </form>
</div>
@endsection
