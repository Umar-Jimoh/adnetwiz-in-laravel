<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        /** @var Guard $auth */
        $auth = auth();

        $data['user_id'] = $auth->id();
        $data['slug'] = Str::slug($data['title']);
        return $data;
    }
}
