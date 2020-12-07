<?php

namespace App\Events;

use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class CreatePost
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

}
