<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Inquiry extends Mailable
{
    use Queueable, SerializesModels;

    private $inquiry;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Inquiry $inquiry
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
        return $this->view('mail.Inquiry', [
            'from' => $this->inquiry->from,
            'name' => $this->inquiry->name,
            'message' => $this->inquiry->message,
        ])->replyTo($this->inquiry->from)->to('david@docampo.ch');
    }
}
