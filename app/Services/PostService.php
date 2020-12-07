<?php

namespace App\Services;

use App\Repositories\Post\PostRepositoryInterface;

class PostService
{
    protected $postRepo;

    public function __construct(
        PostRepositoryInterface $postRepo
    )
    {
        $this->postRepo = $postRepo;
    }

    public function getAll()
    {
        return $this->postRepo->all('*', 'updated_at', 'desc');
    }

    public function getOne($id)
    {
        return $this->postRepo->findOneOrFail($id);
    }

    public function insertOne($post)
    {
        return $this->postRepo->create($post);
    }
}
