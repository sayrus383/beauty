<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', __('Name'))
                ->sort()
                ->cantHide()
                ->render(function (Category $category) {
                    return $category->name;
                }),

            TD::make('id', 'ID')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Category $category) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.categories.edit', $category->id)
                                ->icon('icon-pencil'),

                            Button::make(__('Delete'))
                                ->method('remove')
                                ->confirm('Вы действительно хотите удалить ?')
                                ->parameters([
                                    'id' => $category->id,
                                ])
                                ->icon('icon-trash'),
                        ]);
                }),
        ];
    }
}
