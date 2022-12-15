@component('mail::message')

Test Stage result {{$WAscore}} ,Your email Address {{$email_address}} 
 @component('mail::button', ['url' => 'www.google.com'])
 click Here
 @endcomponent
 @endcomponent
