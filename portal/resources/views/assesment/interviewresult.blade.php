@component('mail::message')

Interview Stage result {{$interviewtotal}} ,Your email Address {{$email_address}} 
 @component('mail::button', ['url' => 'www.google.com'])
 click Here
 @endcomponent
 @endcomponent
