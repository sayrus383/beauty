<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Service;

class SalonController extends Controller
{
    public function index()
    {
        $services = Service::with('attachment')->get();
        $categories = Category::all();
        $employees = Employee::with('attachment')->get();

        return view('salon', compact('services', 'categories', 'employees'));
    }
}
