<?php

namespace App\Listeners;

use App\Events\CreatePost;
use App\Helpers\SendMailHelper;
use App\Mail\MailResponse;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendMailPostCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param CreatePost $event
     * @throws \Throwable
     */
    public function handle(CreatePost $event)
    {
        SendMailHelper::sentMail(
            new MailResponse('post content', 'A post was created !!!'),
            'example@gmail.com'
        );
    }
}
