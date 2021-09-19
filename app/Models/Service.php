<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use Attachable;
    use HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'price_list',
    ];

    protected $translatable = [
        'name',
        'description',
        'price_list',
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
