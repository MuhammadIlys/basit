<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public  $name;
    public  $email;
    public  $subject;
    public  $content;

    public function __construct($name, $email, $subject,$content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject($this->subject)
            ->view('mails.mail');
    }
}
