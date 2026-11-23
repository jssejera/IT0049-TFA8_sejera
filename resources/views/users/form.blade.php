<label for="username">Username</label>
<input id="username" name="username" value="{{ old('username', $user->username ?? '') }}" required maxlength="255">
<label for="full_name">Full name</label>
<input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" required maxlength="255">
<label for="email">Email address</label>
<input id="email" type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required maxlength="255">
@if (! isset($user))
<label for="password">Password</label>
<input id="password" type="password" name="password" required minlength="8">
<label for="password_confirmation">Confirm password</label>
<input id="password_confirmation" type="password" name="password_confirmation" required minlength="8">
@else
<label for="password">New password <span class="hint">(leave blank to keep the current password)</span></label>
<input id="password" type="password" name="password" minlength="8">
<label for="password_confirmation">Confirm new password</label>
<input id="password_confirmation" type="password" name="password_confirmation" minlength="8">
@endif
<p class="hint">Username and email address must be unique.</p>
