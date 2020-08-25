@component('mail::message')
# MicroTech NA Inc.

You have been subscribed our newsletters!

@component('mail::button', ['url' => 'http://www.microtechna.com'])
    Visit us!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
