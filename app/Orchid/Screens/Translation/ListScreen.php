<?php

namespace App\Orchid\Screens\Translation;

use App\Models\Translation;
use App\Orchid\Layouts\TranslationLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ListScreen extends Screen
{
    public $name = 'Переводы';

    public function query(): array
    {
        return [
            'translations' => Translation::orderBy('id', 'DESC')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->icon('icon-plus')
                ->href(route('platform.translations.create')),
        ];
    }

    public function layout(): array
    {
        return [
            TranslationLayout::class
        ];
    }

    public function remove(Request $request)
    {
        Translation::whereId($request->input('id'))->delete();
        Toast::info('Перевод удален');
        Cache::forget('translations');

        return redirect()->route('platform.translations.list');
    }
}
