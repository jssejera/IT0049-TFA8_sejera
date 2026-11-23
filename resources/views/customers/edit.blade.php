@extends('layouts.app')

@section('content')
<p class="eyebrow">Customer records</p><h1>Edit Customer</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf @method('PUT')
        @include('customers.form')
        <div class="actions"><button class="button" type="submit">Update customer</button><a class="button secondary" href="{{ route('customers.index') }}">Cancel</a></div>
    </form>
</div>
@endsection
