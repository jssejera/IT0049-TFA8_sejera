@extends('layouts.app')

@section('content')
<p class="eyebrow">Customer records</p><h1>Add Customer</h1>
<div class="form-card">
    @include('partials.errors')
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        @include('customers.form')
        <div class="actions"><button class="button" type="submit">Save customer</button><a class="button secondary" href="{{ route('customers.index') }}">Cancel</a></div>
    </form>
</div>
@endsection
