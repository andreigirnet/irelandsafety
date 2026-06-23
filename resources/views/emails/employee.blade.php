<x-mail::message>
# Your employer has registered you on the best platform for an Health and Safety Course Course 🎉 Here are your credentials:

Login: {{$email}} <br>
Password: {{$password}}

<x-mail::button :url="'https://www.irelandsafetycourse.com/login'">
Login Here
</x-mail::button>

Best regards,<br>
{{ config('app.name') }}
</x-mail::message>
