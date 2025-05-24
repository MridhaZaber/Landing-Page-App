<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseSectionUpdate;

class WhyChooseSectionUpdateController extends Controller
{
     public function whychoose()
    {
        $page_data = WhyChooseSectionUpdate::where('id',1)->first();
        return view('admin.whychoosesectionupdate_show', compact('page_data'));
    }

    public function whychoose_update(Request $request)
    {
        $page_data = WhyChooseSectionUpdate::where('id',1)->first();

        $request->validate([
            'title' => 'required'
        ]);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'whychooseupdate'.time().'.' . $ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $page_data->photo = $final_name;
        }

         if($request->hasFile('background_photo')) {
            $request->validate([
                'background_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->background_photo));

            $ext = $request->file('background_photo')->extension();
            $final_name = 'whychooseupdatebackground'.time().'.' . $ext;

            $request->file('background_photo')->move(public_path('uploads/'),$final_name);

            $page_data->background_photo = $final_name;
        }

        if($request->hasFile('photo1')) {
            $request->validate([
                'photo1' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo1));

            $ext = $request->file('photo1')->extension();
            $final_name = 'whychoosephoto1'.time().'.' . $ext;

            $request->file('photo1')->move(public_path('uploads/'),$final_name);

            $page_data->photo1 = $final_name;
        }

        if($request->hasFile('photo2')) {
            $request->validate([
                'photo2' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo2));

            $ext = $request->file('photo2')->extension();
            $final_name = 'whychoosephoto2'.time().'.' . $ext;

            $request->file('photo2')->move(public_path('uploads/'),$final_name);

            $page_data->photo2 = $final_name;
        }

        if($request->hasFile('photo3')) {
            $request->validate([
                'photo3' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo3));

            $ext = $request->file('photo3')->extension();
            $final_name = 'whychoosephoto3'.time().'.' . $ext;

            $request->file('photo3')->move(public_path('uploads/'),$final_name);

            $page_data->photo3 = $final_name;
        }

        if($request->hasFile('photo4')) {
            $request->validate([
                'photo4' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->photo4));

            $ext = $request->file('photo4')->extension();
            $final_name = 'whychoosephoto4'.time().'.' . $ext;

            $request->file('photo4')->move(public_path('uploads/'),$final_name);

            $page_data->photo4 = $final_name;
        }

        $page_data->title = $request->title;
        $page_data->title1= $request->title1;
        $page_data->title3= $request->title3;
        $page_data->title4= $request->title4;
        $page_data->title5= $request->title5;
        $page_data->title6= $request->title6;
        $page_data->description= $request->description;
        $page_data->button_name= $request->button_name;
        $page_data->button_url= $request->button_url;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }

}
