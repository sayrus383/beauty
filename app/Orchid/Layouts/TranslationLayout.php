<?php

namespace App\Orchid\Layouts;

use App\Models\Translation;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TranslationLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'translations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('slug', 'Ключ')
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Translation $translation) {
                    return $translation->slug;
                }),

            TD::make('value', 'Значение')
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Translation $translation) {
                    return $translation->value;
                }),

            TD::make('id', 'ID')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Translation $translation) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.translations.edit', $translation->id)
                                ->icon('icon-pencil'),

                            Button::make(__('Delete'))
                                ->method('remove')
                                ->confirm('Вы действительно хотите удалить ?')
                                ->parameters([
                                    'id' => $translation->id,
                                ])
                                ->icon('icon-trash'),
                        ]);
                }),
        ];
    }
}
