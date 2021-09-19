<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $services = Service::with('attachment')->get();
        $categories = Category::all();

        return view('salon', compact('services', 'categories'));
    }
}
