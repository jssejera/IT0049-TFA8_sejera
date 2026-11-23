@extends('layouts.app')

@section('content')
<section class="hero">
<p class="eyebrow">IT0049 Technical Formative Assessment 8</p>
<h1>Laravel POS<br><span style="color:var(--cyan)">Locking It Down</span></h1>
<p>Database-backed customer and user records managed through resource controllers, protected by authentication, and ready for local email notification testing.</p>
<span class="status"><i></i> SYSTEM ONLINE &middot; ELOQUENT CONNECTED</span>
</section>
<div class="cards">
    <div class="card"><h2>01 // Customers</h2><p>Customer records retrieved from the <code>customers</code> table through Eloquent.</p><a class="button" href="{{ route('customers.index') }}">Access records →</a></div>
    <div class="card"><h2>02 // Users</h2><p>POS user records retrieved from the <code>users</code> table through Eloquent.</p><a class="button" href="{{ route('users.index') }}">Access records →</a></div>
</div>
@endsection
