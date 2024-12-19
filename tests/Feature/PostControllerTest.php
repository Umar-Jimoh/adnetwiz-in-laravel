<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_create_a_new_post() {
        // Create a user and category
        $user = User::factory()->create();
        $category = \App\Models\Category::factory()->create();

        // Upload thumbnail image
        $file = UploadedFile::fake()->image('thumbnail.jpg', 600, 500);

        // Create a PST request to create a post
        $response = $this->actingAs($user)->post(route('posts.store'), [
            'title' => 'Test Post',
            'category' => $category->id,
            'thumbnail' => $file, // Assume the thumbnail is just a name for testing
            'content' => 'This is a test post content.',
        ]);

        // Check that the response is a redirection
        $response->assertRedirect(route('dashboard'));

        // Check that the post was created in the database
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'category_id' => $category->id,
            'content' => 'This is a test post content.',
        ]);
    }
}
