<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
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
            Quill::make('service.description')
                ->title('Описание')->required(),
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('service.price')
                    ->title('Прайс'),

                Picture::make('service.image')
                    ->targetId()
                    ->title('Фото'),

                Select::make('service.service_id')->fromModel(Service::whereNull('service_id'), 'name')
                    ->empty('Не указано')
                    ->title('Услуга (если это подуслуга)')
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
