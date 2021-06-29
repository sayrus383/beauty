<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;

class Variable extends Model
{
    use HasFactory, Attachable;

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = ['slug', 'data'];

    protected $appends = ['images'];

    public function getImagesAttribute()
    {
        return $this->attachment->map(function (Attachment $attachment) {
            return $attachment->id;
        });
    }

    public function getField(string $field, bool $multiLanguage = true)
    {
        if ($multiLanguage) {
            return $this->data[$field][app()->getLocale()] ?? ($this->data[$field]['ru'] ?? null);
        }

        return $this->data[$field] ?? null;
    }
}
