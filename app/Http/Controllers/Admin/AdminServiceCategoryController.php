<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminServiceCategory;

class AdminServiceCategoryController extends Controller
{
    public function index()
    {
        $all_data = AdminServiceCategory::orderBy('id','asc')->get();
        return view('admin.service_category_show', compact('all_data'));
    }

    public function add()
    {
        $service_categories = AdminServiceCategory::get();
        return view('admin.service_category_add', compact('service_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_title' => 'required',
            'category_description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new AdminServiceCategory();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'photo'.time().'.' . $ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $page_data->photo = $final_name;
        }


        $obj->category_title = $request->category_title;
        $obj->category_description = $request->category_description;
        $obj->save();

        return redirect()->route('admin.service_category_show')->with('success', 'Data is inserted successfully.');
    }

}
