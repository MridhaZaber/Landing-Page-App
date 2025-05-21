<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoTwo;
use Illuminate\Http\Request;

class InfoTwoController extends Controller
{
     public function infotwo()
    {
       
        
        $page_data = InfoTwo::where('id',1)->first();
        return view('admin.home_info_two_show', compact('page_data'));
    }

    public function infotwo_update(Request $request)
    {
        
         
        
        $page_data = InfoTwo::where('id',1)->first();

        $request->validate([
            'left_wrap_title' => 'required'
        ]);

        if($request->hasFile('left_wrap_photo')) {
            $request->validate([
                'left_wrap_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->left_wrap_photo));

            $ext = $request->file('left_wrap_photo')->extension();
            $final_name = 'left-wrap'.time().'.' . $ext;

            $request->file('left_wrap_photo')->move(public_path('uploads/'),$final_name);

            $page_data->left_wrap_photo = $final_name;
        }

         if($request->hasFile('bottom_wrap_photo1')) {
            $request->validate([
                'bottom_wrap_photo1' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->bottom_wrap_photo1));

            $ext = $request->file('bottom_wrap_photo1')->extension();
            $final_name = 'bottbottom_wrap_photo2'.time().'.' . $ext;

            $request->file('bottom_wrap_photo1')->move(public_path('uploads/'),$final_name);

            $page_data->bottom_wrap_photo1 = $final_name;
        }

        if($request->hasFile('bottom_wrap_photo2')) {
            $request->validate([
                'bottom_wrap_photo2' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->bottom_wrap_photo2));

            $ext = $request->file('bottom_wrap_photo2')->extension();
            $final_name = 'bottom_wrap_photo2'.time().'.' . $ext;

            $request->file('bottom_wrap_photo2')->move(public_path('uploads/'),$final_name);

            $page_data->bottom_wrap_photo2 = $final_name;
        }

        if($request->hasFile('right_photo')) {
            $request->validate([
                'right_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->right_photo));

            $ext = $request->file('right_photo')->extension();
            $final_name = 'right_photo'.time().'.' . $ext;

            $request->file('right_photo')->move(public_path('uploads/'),$final_name);

            $page_data->right_photo = $final_name;
        }

      

        

        $page_data->left_wrap_title = $request->left_wrap_title;
        $page_data->left_wrap_description= $request->left_wrap_description;
        $page_data->bottom_wrap_title1= $request->bottom_wrap_title1;
        $page_data->bottom_wrap_description1= $request->bottom_wrap_description1;
        $page_data->bottom_wrap_title2= $request->bottom_wrap_title2;
        $page_data->bottom_wrap_description2= $request->bottom_wrap_description2;
    
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }

}
