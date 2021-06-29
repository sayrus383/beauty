<?php

namespace App\Orchid\Screens\Translation;

use App\Models\Translation;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FormScreen extends TranslationsScreen
{
    public $name = 'Перевод';

    public function query(Translation $translation): array
    {
        return [
            'translation' => $translation->toArray()
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('translation.slug')
                    ->placeholder('Ключ')
                    ->title('Ключ'),
            ])
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('translation.value')
                ->placeholder('Значение')
                ->title('Значение'),
        ];
    }

    public function save(Translation $translation, Request $request)
    {
        $translation->fill($request->input('translation'));
        $translation->save();

        Toast::success(__('Перевод изменен'));
        Cache::forget('translations');

        return redirect()->route('platform.translations.list');
    }
}
