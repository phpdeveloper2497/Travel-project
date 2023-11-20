<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Post extends Model
{
    use HasTranslations;


    public $translatable = [
        'title',
        'desc'
    ];
    protected $casts = [
        'title' => 'array',
        'desc' => 'array',
        'published_at' => 'datetime',
    ];
}
