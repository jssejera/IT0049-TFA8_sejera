@extends('layouts.app')

@section('content')
<p class="eyebrow">POS user records</p><h1>Edit User</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('users.form')
        <label for="avatar">Profile picture</label>
        <input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/webp">
        <p class="hint">Optional. JPG, PNG, or WEBP only, maximum 2 MB. The image is resized to a 300 × 300 display-ready thumbnail.</p>
        <div class="actions"><button class="button" type="submit">Update user</button><a class="button secondary" href="{{ route('users.index') }}">Cancel</a></div>
    </form>
</div>
@endsection
