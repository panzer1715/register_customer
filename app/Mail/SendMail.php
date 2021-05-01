<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $Email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($Email)
    {
        $this->Email = $Email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     
        return $this->subject('Subject: verify user')->view('emails.sendmail');
    }
}
