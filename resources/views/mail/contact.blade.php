<x-mail::message>
# Mail from {{$name}}
# Send from: {{$email}}<br>

{{$body}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
