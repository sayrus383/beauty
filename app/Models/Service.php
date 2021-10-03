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
        'price',
        'service_id',
    ];

    protected $translatable = [
        'name',
        'description',
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

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_id');
    }
}
