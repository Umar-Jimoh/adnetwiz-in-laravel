<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostListResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class CategoryController extends Controller
{
    function show(string $slug): View
    {   
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::where('category_id', $category->id)->published()->paginate(12);

        return view('category.show', ['posts' => PostListResource::collection($posts)->response()->getData(), 'category' => $category]);
    }
}
