@component('mail::message')
# Welcome to InstagramClone Application!

This is an application demo welcome mail.

@component('mail::button', ['url' => 'localhost:8000'])
GO TO WEBSITE
@endcomponent

Best regards,<br>
Alperen
@endcomponent
