<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::whereNull('service_id')->get();
        $service = $request->input('id') ? Service::whereNull('service_id')->find($request->input('id')) : $services->first();

        if (is_null($service)) {
            $service = Service::firstOrFail();
        }

        $service->load('attachment', 'services.attachment');

        return view('services', compact('services', 'service'));
    }
}
