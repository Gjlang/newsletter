<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeSubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $url;

    public function __construct(string $url = '#')
    {
        $this->url = $url;
    }

    public function build()
    {
        return $this->subject('Welcome to KL The Guide!')
            ->markdown('emails.welcome', ['url' => $this->url]);
    }
}
