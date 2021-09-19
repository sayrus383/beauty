<?php

namespace App\Orchid\Screens\Variable;

use App\Orchid\Screens\Abstraction\VariableScreen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Map;
use Orchid\Screen\Fields\Matrix;
use Orchid\Support\Facades\Layout;

class SettingScreen extends VariableScreen
{

    protected $variableKey = 'settings';

    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Настройки';

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('variable.data.instagram')
                    ->title('Ссылка на instagram'),

                Input::make('variable.data.youtube')
                    ->title('Ссылка на youtube'),

                Input::make('variable.data.facebook')
                    ->title('Ссылка на facebook'),

                Input::make('variable.data.twitter')
                    ->title('Ссылка на twitter'),

                Input::make('variable.data.link')
                    ->title('Ссылка на интернет магазин'),

                Input::make('variable.data.phone_number')
                    ->title('Номер телефона'),

                Matrix::make('variable.data.contacts')
                    ->title('Контакты')
                    ->columns(['address', 'place', 'schedule', 'phone_number', 'map'])
                    ->fields([
                        'address'      => Input::make()->required(),
                        'place'        => Input::make()->required(),
                        'schedule'     => Input::make()->required(),
                        'phone_number' => Input::make()->required(),
                        'map'          => Map::make(),
                    ])
            ])
        ];
    }
}
