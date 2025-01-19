<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Resources\PostListResource;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Paginate posts and apply the "published" scope
        $posts = Post::query()->published()->paginate(12);
    
        // Transform both data and pagination
        return view('home', ['posts' => PostListResource::collection($posts)->response()->getData()]);
    }

    function show(string $categorySlug, string $postSlug): View
    {   
        $post = Post::where('slug', $postSlug)->firstOrFail();

        $postResource = new PostResource($post);
        return view('post.show', ['post' => $postResource->response()->getData()->data]);
    }
    
}
