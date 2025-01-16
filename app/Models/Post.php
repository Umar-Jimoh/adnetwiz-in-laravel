<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function registerMediaConversions(?Media $media = null): void
    {
        // Thumbnail for recent/popular posts
        $this->addMediaConversion('thumbnail')
        ->width(90);
        // Image for post lists (e.g., cards)
        $this->addMediaConversion('card')
        ->width(330);
        // Featured image for the post page
        $this->addMediaConversion('featured')
        ->width(620);
    }

    public function category():BelongsTo {

        return $this->belongsTo(Category::class);
    }
}
