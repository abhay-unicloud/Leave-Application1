<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $content;

    public function __construct(array $content) {
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject($this->content['subject'])
            ->view('pages.test-mail', ['content' => $this->content]);
    }
}
