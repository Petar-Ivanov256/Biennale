<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $description;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $description, $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->description = $description;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('senderglassbiennalebg@gmail.com', 'Biennale')
            ->subject('Нов контакт - '.$this->name)
            ->view('emails.contactForm');
    }
}
