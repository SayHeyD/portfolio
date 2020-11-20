@component('mail::message')
  # A new Inquiry was received from {{ $name }}

  {{ $body_message }}
@endcomponent