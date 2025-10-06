<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KlNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->subject($this->data['subject'] ?? 'KL The Guide — Weekly Highlights')
            ->view('emails.kl_newsletter', $this->data);
    }
}
