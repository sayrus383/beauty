<?php

namespace App\Orchid\Screens\Employee;

use App\Models\Category;
use App\Models\Employee;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FormScreen extends TranslationsScreen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Сотрудник';

    /**
     * Query data.
     *
     * @param Employee $employee
     * @return array
     */
    public function query(Employee $employee): array
    {
        return [
            'employee' => $employee->toArray()
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('employee.name')
                    ->title('Имя сотрудника')
                    ->required(),

                Select::make('employee.category_id')
                    ->fromModel(Category::class, 'name')
                    ->required(),

                Picture::make('employee.image')
                    ->targetId()
                    ->required()
                    ->title('Фото'),
            ])
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('employee.position')
                ->title('Должность')->required(),
            TextArea::make('employee.description')
                ->title('Описание')->required(),
            Input::make('employee.address')
                ->title('Адрес'),
            Input::make('employee.bc')
                ->title('БЦ'),
        ];
    }

    public function save(Employee $employee, Request $request)
    {
        $employee->fill($request->input('employee'));
        $employee->save();

        if ($request->has('employee.image')){
            $employee->attachment()->sync($request->input('employee.image'));
        }

        Toast::info('Сотрудник сохранен');

        return redirect()->route('platform.employees.list');
    }
}
