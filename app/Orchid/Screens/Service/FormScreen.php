<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;

class FormScreen extends TranslationsScreen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Услуга';

    /**
     * Query data.
     *
     * @param Service $service
     * @return array
     */
    public function query(Service $service): array
    {
        return [
            'service' => $service->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('service.name')
                ->title('Название')->required(),
            TextArea::make('service.description')
                ->title('Описание')->required(),

            Matrix::make('service.price_list')
                ->title('Прайс')
                ->columns(['name', 'service_title', 'service_price'])
                ->fields([
                    'name'          => Input::make()->required(),
                    'service_title' => Input::make()->required(),
                    'service_price' => Input::make()->required(),
                ])
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('service.image')
                    ->targetId()
                    ->required()
                    ->title('Фото'),
            ])
        ];

    }

    public function save(Service $service, Request $request)
    {
        $service->fill($request->input('service'));
        $service->save();

        if ($request->has('service.image')) {
            $service->attachment()->sync($request->input('service.image'));
        }

        Toast::info('Услуга сохранена');

        return redirect()->route('platform.services.list');
    }
}
