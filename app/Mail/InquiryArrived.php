<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryArrived extends Mailable
{
    use Queueable, SerializesModels;

    private $inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\Models\Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.inquiry_arrived', [
            'name' => $this->inquiry->name,
            'body_message' => $this->inquiry->message,
        ])
            ->from(env('MAIL_USERNAME'), 'Portfolio');
    }
}
