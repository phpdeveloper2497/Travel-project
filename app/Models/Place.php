<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Place extends Model implements Sortable, HasMedia
{

    use SortableTrait;
    use InteractsWithMedia;
    use HasTranslations;


    public $translatable = [
        'title',
        'description'
    ];

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('place')->singleFile();
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
    }


    public function tours()
    {
        return $this->hasMany(Tour::class, 'category_id', 'id');
    }
}
