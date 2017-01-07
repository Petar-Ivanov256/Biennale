<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewAuthorEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $country;
    public $еmail;
    public $tel;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $country, $еmail, $tel)
    {
        $this->name = $name;
        $this->country = $country;
        $this->mail = $еmail;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('senderglassbiennalebg@gmail.com', 'Biennale')
            ->subject('Нов Автор - '.$this->name)
            ->view('emails.newAuthor');
    }
}
