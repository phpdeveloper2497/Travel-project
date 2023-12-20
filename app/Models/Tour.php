<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Tour extends Model implements Sortable, HasMedia
{
    use SortableTrait;
    use InteractsWithMedia;
    use HasTranslations;


    public $translatable = [
        'title',
        'description',
        'short_description',
        'from_to',
        'area',
        'days',
        'season'
    ];


    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'json',
        'short_description' => 'array',
        'from_to' => 'array',
        'area' => 'array',
        'days' => 'array',
        'season' => 'array',
    ];

    protected function description(): Attribute
    {
        return Attribute::make(
            get: function (){
                $locale = \App::currentLocale();
                $description = 'description_'.$locale;
                return $this->$description;
            },
        );
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('tour_main')->singleFile();
        $this->addMediaCollection('tour_gallery');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
    }

    public function place()
    {
        return $this->belongsTo(Place::class, 'category_id', 'id');
    }
}
