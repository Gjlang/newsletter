@component('mail::message')
# Welcome to KL The Guide!

Thanks for subscribing. We’ll send the best of KL—events, eats, and hidden gems—right to your inbox.

@component('mail::button', ['url' => $url ?? '#'])
Browse Latest Posts
@endcomponent

If this wasn’t you, you can ignore this email.

Thanks,<br>
KL The Guide Team
@endcomponent
