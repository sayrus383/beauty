<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class SettingComposer
{
    public function compose(View $view)
    {
        $view->with('settings', get_variable('settings'));
    }
}
