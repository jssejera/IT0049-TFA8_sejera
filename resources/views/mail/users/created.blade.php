<x-mail::message>
# Account Created

Hello {{ $user->full_name }},

Your Laravel POS account with username **{{ $user->username }}** has been created.

<x-mail::button :url="route('users.show', $user)">
View Account
</x-mail::button>

Thank you,<br>
{{ config('app.name') }}
</x-mail::message>
