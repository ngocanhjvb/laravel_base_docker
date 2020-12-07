<?php

namespace App\Repositories\Post;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Post\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Post::class;
    }
}
