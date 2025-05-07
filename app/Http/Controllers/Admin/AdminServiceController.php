<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AdminServiceController extends Controller
{
    public function services()
    {
        $service_data = Service::where('id',1)->first();
        return view('admin.page_services', compact('service_data'));
    }

    public function services_update(Request $request)
    {
        $service_data = Service::where('id',1)->first();

        $request->validate([
            'service_title' => 'required',
            'service_description' => 'required'
        ]);

        $service_data->service_title = $request->service_title;
        $service_data->service_description = $request->service_description;
        
        $service_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }
}
