@extends('layouts.app')

@section('content')
<div class="page-head"><div><p class="eyebrow">Customer records</p><h1>Customers</h1></div><p class="count">{{ $customers->count() }} records // database online</p></div>
<div class="toolbar"><span>Manage customer details.</span><a class="button" href="{{ route('customers.create') }}">+ Add customer</a></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Full name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>
@forelse ($customers as $customer)
<tr><td class="id">#{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone ?: '—' }}</td><td><a href="{{ route('customers.show', $customer) }}">View</a> | <a href="{{ route('customers.edit', $customer) }}">Edit</a> <form style="display:inline" method="POST" action="{{ route('customers.destroy', $customer) }}">@csrf @method('DELETE')<button type="submit" style="background:none;border:0;color:var(--danger);font:inherit;cursor:pointer" onclick="return confirm('Delete this customer?')">Delete</button></form></td></tr>
@empty
<tr><td colspan="5">No customers found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
