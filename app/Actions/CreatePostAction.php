<?php

namespace App\Actions;

use App\Models\Post;
use App\DTOs\PostDTO;

class CreatePostAction
{

    public function __construct(private readonly PostDTO $postDto)
    {}

    public function execute():Post
    {
        //see PostPolicy.php
         auth()->user()?->can('create', Post::class);

		$post = Post::create($this->postDto->toArray());
		//Send out Newsletter...

        return $post;

    }

}
