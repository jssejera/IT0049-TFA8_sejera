@extends('layouts.app')

@section('content')
<p class="eyebrow">Customer record #{{ $customer->id }}</p><h1>{{ $customer->full_name }}</h1>
<div class="form-card"><p><strong>Email:</strong> {{ $customer->email }}</p><p><strong>Phone:</strong> {{ $customer->phone ?: 'Not provided' }}</p><div class="actions"><a class="button" href="{{ route('customers.edit', $customer) }}">Edit customer</a><a class="button secondary" href="{{ route('customers.index') }}">Back</a></div></div>
@endsection
