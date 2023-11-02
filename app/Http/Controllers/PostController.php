<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\DTOs\PostDTO;
use App\Actions\CreatePostAction;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(['title', 'body', 'published_at']);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
      return view('posts.create');  
    }

    public function store(Request $request)
    {

        $postDto = PostDTO::fromRequest($request);

	    $post = (new CreatePostAction($postDto))->execute();

	    return redirect('/posts');

    }

}
