<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
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
                ->title('Название'),
            TextArea::make('service.description')
                ->title('Описание')
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('service.image')
                    ->targetId()
                    ->title('Фото'),
            ])
        ];

    }

    public function save(Service $service, Request $request)
    {
        $service->fill($request->all());
        $service->save();

        if ($request->has('service.image')){
            $service->attachment()->sync($request->input('service.image'));
        }

        Toast::info('Услуга сохранена');

        return redirect()->route('platform.service.list');
    }
}
