@extends('layouts.app')

@section('content')
<div class="page-head"><div><p class="eyebrow">POS user records</p><h1>Users</h1></div><p class="count">{{ $users->count() }} records // database online</p></div>
<div class="toolbar"><span>Manage accounts and profile images.</span><a class="button" href="{{ route('users.create') }}">+ Add user</a></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Avatar</th><th>Username</th><th>Full name</th><th>Action</th></tr></thead><tbody>
@forelse ($users as $user)
<tr><td class="id">#{{ $user->id }}</td><td>@if ($user->avatar)<img class="avatar" src="{{ asset('storage/'.$user->avatar) }}" alt="Avatar of {{ $user->full_name }}">@else<span class="avatar-placeholder">{{ strtoupper(substr($user->full_name, 0, 1)) }}</span>@endif</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td><td><a href="{{ route('users.show', $user) }}">View</a> | <a href="{{ route('users.edit', $user) }}">Edit</a> <form style="display:inline" method="POST" action="{{ route('users.destroy', $user) }}">@csrf @method('DELETE')<button type="submit" style="background:none;border:0;color:var(--danger);font:inherit;cursor:pointer" onclick="return confirm('Delete this user?')">Delete</button></form></td></tr>
@empty
<tr><td colspan="5">No users found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
