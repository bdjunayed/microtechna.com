@component('mail::message')
# MicroTech NA Inc.

Your feedback has been received.
Thank you for taking the time to communicate with MicroTech NA Inc., and our administration. Your experience and feedback is vital, and we welcome you to share further at any time. We would also encourage you to subscribe to our email newsletter if you have not already done so.

@component('mail::button', ['url' => 'http://www.microtechna.com'])
Visit us!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
