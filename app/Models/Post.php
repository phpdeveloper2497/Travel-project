<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Post extends Model  implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

    public $translatable = [
        'title',
        'desc'
    ];
    protected $casts = [
        'title' => 'array',
        'desc' => 'array',
        'published_at' => 'datetime',
    ];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post')->singleFile();
        $this->addMediaCollection('posts');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

}
