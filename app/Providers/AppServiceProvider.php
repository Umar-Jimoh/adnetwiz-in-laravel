<?php

namespace App\Providers;

use App\Http\Resources\PostListResource;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        view()->composer(['home', 'category.show', 'post.show', 'search'], function ($view) {
            
            $recentPosts = cache()->remember('recent-posts', now()->addMinutes(30), function () {
                return Post::latest()->limit(5)->get();
            });

            $popularPosts = cache()->remember('popular-posts', now()->addMinutes(30), function () {
                return Post::inRandomOrder()->limit(5)->get();
            });

            $recentPostsResource = PostListResource::collection($recentPosts);
            $popularPostsResource = PostListResource::collection($popularPosts);

            $view->with([
                'recentPosts' => $recentPostsResource->response()->getData(),
                'popularPosts' => $popularPostsResource->response()->getData()
            ]);
        });
    }
}
