<?php

namespace App\Orchid\Screens\Employee;

use App\Models\Employee;
use App\Orchid\Layouts\EmployeeListTable;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Сотрудники';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'employees' => Employee::all()
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->icon('icon-plus')
                ->href(route('platform.employees.create')),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            EmployeeListTable::class
        ];
    }

    public function remove(Request $request)
    {
        Employee::whereId($request->input('id'))->delete();
        Toast::info('Сотрудник удален');

        return redirect()->route('platform.employees.list');
    }
}
