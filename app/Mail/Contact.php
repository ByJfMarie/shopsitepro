<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

        /**
     * Elements de contact
     * @var object
     */
    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Object $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */ 
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject('Prise de contact - Shop Site Pro')
                    ->view('emails.contact');
    }
}
