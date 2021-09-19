<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $variable = get_variable('home');

        return view('layouts.home', compact('variable'));
    }
}
