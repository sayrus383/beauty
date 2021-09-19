<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Attachment\Attachable;
use Spatie\Translatable\HasTranslations;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;
    use Attachable;

    protected $fillable = [
        'name',
        'category_id',
        'deleted_at',
        'position',
        'description',
        'address',
        'bc',
    ];

    protected $translatable = [
        'position',
        'description',
        'address',
        'bc'
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
