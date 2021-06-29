<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translation extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'slug',
        'value'
    ];

    public $translatable = [
        'value',
    ];
}
