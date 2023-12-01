<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model implements Sortable, HasMedia
{
    use SortableTrait;
    use InteractsWithMedia;
    use HasTranslations;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    public $translatable = [
        'title',
    ];

    protected $casts = [
        'title' => 'array',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery')->singleFile();
        $this->addMediaCollection('galleries');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
    }
}



