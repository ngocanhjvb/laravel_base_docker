<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;

class MailResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $subject;

    /**
     * MailResponse constructor.
     * @param $content
     * @param $subject
     */
    public function __construct($content, $subject)
    {
        $this->content = $content;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('mails.mail')
            ->subject($this->subject)
            ->with(
                [
                    'content' => $this->content,
                ]
            );
    }
}
