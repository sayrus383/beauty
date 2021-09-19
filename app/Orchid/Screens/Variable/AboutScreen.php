<?php

namespace App\Orchid\Screens\Variable;

use App\Orchid\Screens\Abstraction\VariableScreen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;

class AboutScreen extends VariableScreen
{
    protected $variableKey = 'about';

    public $name = 'О нас';

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('variable.data.title')
                ->title('Тайтл')
                ->value('О нас'),

            TextArea::make('variable.data.slogan')
                ->title('Слоган')
                ->value('Мы используем только те бренды, которые показали лучшие результаты в работе.'),

            TextArea::make('variable.data.text')
                ->title('Текст')
                ->value('№1 Beauty — уникальные пространства, в которых слились в единое целое высококачественный
                            сервис и искусство создания истинно элегантных и стильных образов.'),

            Quill::make('variable.data.description')
                ->title('Описание')
                ->value(' <p>Наш бренд был основан в 2014 году для людей, которым важен уют , сервис и качество услуг!
                            Наши гости могут воспользоваться параллельным сервисом в 4 или 6 рук, чтобы освободить время
                            для более важных дел. </p>
                        <p>Наши гости могут воспользоваться параллельным сервисом в 4 или 6 рук, чтобы освободить время
                            для более важных дел. Наш бренд был основан в 2014 году для людей, которым важен уют ,
                            сервис и качество услуг!</p>')
        ];
    }
}
