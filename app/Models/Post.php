<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;
    use Attachable;

    protected $fillable = [
        'title',
        'content',
        'published_at',
        'deleted_at',
    ];

    public $translatable = [
        'title',
        'content',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];


    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->attachment->first()->id ?? null;
    }

    public function getImageUrlAttribute()
    {
        return $this->attachment->first() ? $this->attachment->first()->url() : null;
    }
}
