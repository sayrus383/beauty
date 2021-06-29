<?php

use App\Models\Translation;
use App\Models\Variable;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_variable')) {
    function get_variable(string $slug): Variable
    {
        return Variable::where('slug', $slug)->firstOrFail();
    }
}

if (!function_exists('pretty_phone')) {
    function pretty_phone($phone): string
    {
        return str_replace(['(', ')', '+', ' ', '-', '_'], '', $phone);
    }
}

if (!function_exists('get_translation')) {
    function get_translation(string $slug, $withoutBreaks = false): string
    {
        $translations = Cache::rememberForever('translations', function () {
            return Translation::all();
        });

        $value = $slug;
        $translation = $translations->where('slug', $slug)->first();

        if ($translation) {
            $value = $translation->value ?: $translation->getTranslation('value', 'ru');
        }

        $value = $value ?: $slug;

        return $withoutBreaks ? str_replace(['<br>', '</br>'], '', $value) : $value;
    }
}
