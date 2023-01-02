@component('mail::message')

Your User Name: {{$email_address}}
Passwrd: {{$password}}
 @component('mail::button', ['url' => 'www.google.com'])
 click Here
 @endcomponent
 @endcomponent
