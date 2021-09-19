<?php

namespace App\Orchid\Screens\Variable;

use App\Orchid\Screens\Abstraction\VariableScreen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;

class HomeScreen extends VariableScreen
{
    public $variableKey = 'home';

    public $name = 'Главная страница (ПРОМО)';

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('variable.data.title')
                ->title('Тайтл страницы (мета)')
                ->value(config('app.name')),
            Quill::make('variable.data.salon_text')
                ->title('Текст для главной салона')
                ->value('№1 Beauty — уникальные пространства, в которых слились в единое целое
                                        высококачественный сервис и искусство создания истинно элегантных и стильных
                                        образов.'),
            Quill::make('variable.data.store_text')
                ->title('Текст для главной интернет магазина')
                ->value('№1 Beauty — уникальные пространства, в которых слились в единое целое
                                        высококачественный сервис и искусство создания истинно элегантных и стильных
                                        образов.'),
        ];
    }
}
