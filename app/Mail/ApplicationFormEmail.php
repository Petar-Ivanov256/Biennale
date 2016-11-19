<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationFormEmail extends Mailable
{
    use Queueable, SerializesModels;
    // https://mattstauffer.co/blog/introducing-mailables-in-laravel-5-3 - Tutorial
    // Passed dinamic changed parameters
    public $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.applicationFormEmail');
    }
}
