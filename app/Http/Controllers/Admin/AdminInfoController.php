<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Info;

class AdminInfoController extends Controller
{
    

    public function index()
    {
        $all_data = Info::get();
        return view('admin.info_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.info_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'info_description' => 'required',
            
            'info_photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Info();

        $ext = $request->file('info_photo')->extension();
        $final_name = 'info_'.time().'.'.$ext;
        $request->file('info_photo')->move(public_path('uploads/'),$final_name);
        $obj->info_photo = $final_name;
        
        $obj->info_description = $request->info_description;
        $obj->save();

        return redirect()->route('admin_info_show')->with('success', 'Data is inserted successfully.');
    }

    public function edit($id)
    {
        $row_data = Info::where('id',$id)->first();
        return view('admin.info_edit',compact('row_data'));
    }

    
    public function update(Request $request,$id)
    {
        $request->validate([
            'info_description' => 'required',
            
        ]);

        $obj = Info::where('id',$id)->first();

        if($request->hasFile('info_photo')) {
            $request->validate([
                'info_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->info_photo));

            $ext = $request->file('info_photo')->extension();
            $final_name = 'info_'.time().'.'.$ext;

            $request->file('info_photo')->move(public_path('uploads/'),$final_name);

            $obj->info_photo = $final_name;
        }

        $obj->info_description = $request->info_description;
        
        $obj->update();

        return redirect()->route('admin_info_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $row_data = Info::where('id',$id)->first();
        unlink(public_path('uploads/'.$row_data->info_photo));
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }

}
