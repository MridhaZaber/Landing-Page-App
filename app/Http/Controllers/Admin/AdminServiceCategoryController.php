<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminServiceCategory;
use App\Traits\ImageUploadTrait;

class AdminServiceCategoryController extends Controller
{
    use ImageUploadTrait;

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

        $service_categories = new AdminServiceCategory();
 
        $logoPath = $this->uploadImage($request, 'photo', 'uploads');
    
        $service_categories->photo = $logoPath;
    
        $service_categories->category_title = $request->category_title;
        $service_categories->category_description = $request->category_description;
        $service_categories->save();

        return redirect()->route('admin.service_category_show')->with('success', 'Data is inserted successfully.');
    }

    public function edit($id)
    {
        $service_data = AdminServiceCategory::where('id',$id)->first();
        return view('admin.service_category_edit',compact('service_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'category_title' => 'required',
            'category_description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);


        $service_categories = AdminServiceCategory::where('id',$id)->first();
        
        $logoPath = $this->uploadImage($request, 'photo', 'uploads');
    
        $service_categories->photo = $logoPath;
    
        $service_categories->category_title = $request->category_title;
        $service_categories->category_description = $request->category_description;
        $service_categories->save();

        return redirect()->route('admin.service_category_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $row_data = AdminServiceCategory::where('id',$id)->first();
        $row_data->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
