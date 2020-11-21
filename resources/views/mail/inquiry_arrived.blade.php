@component('mail::message')
  # Hello {{ $name }}, your Inquiry was received successfully!

  ## Your Message

  {{ $body_message }}
@endcomponent