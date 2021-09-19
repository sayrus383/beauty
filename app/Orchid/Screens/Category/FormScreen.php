<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Toast;

class FormScreen extends TranslationsScreen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Категория';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        return [
            'category' => $category->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('category.name')
                ->title('Название')->required(),
        ];
    }

    public function save(Category $category, Request $request)
    {
        $category->fill($request->input('category'));
        $category->save();

        Toast::info('Категория сохранена');

        return redirect()->route('platform.categories.list');
    }

}
