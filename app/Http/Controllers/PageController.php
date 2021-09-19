<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $variable = get_variable('about');

        return view('about', compact('variable'));
    }
}
