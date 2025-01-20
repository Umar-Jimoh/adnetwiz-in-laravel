<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image' => $this->getFirstMediaUrl('images', 'featured'),
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
            ],
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name,
                'slug' => $this->category->slug,
            ],
            'recommends' => $this->recommendPosts(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    protected function recommendPosts()
    {
        $recommendPosts = $this::where('category_id', $this->category->id)
            ->where('id', "!=", $this->id)
            ->limit(6)
            ->get();

        return RecommendPostResource::collection($recommendPosts);
    }
}
