@component('mail::message')

A contact request has been sent on your website:

<strong>IP Address: {{ $ip }}</strong>

<strong>Name:</strong> {{ $contact->name }}

<strong>Mail:</strong> {{ $contact->email }}

<strong>Submission Type:</strong> {{ $contact->submissionType->type }}

<strong>Message:</strong> {!! $contact->message !!}


This email was sent from the contact form on Recruiting Brain <a href="{{ route('contact') }}">{{ route('contact') }}</a>
@endcomponent