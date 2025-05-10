<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\HomePageItem;

class AdminHomePageController extends Controller
{

    /*home banner*/
    public function banner()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_banner_show', compact('page_data'));
    }

    public function banner_update(Request $request)
    {
        $page_data = HomePageItem::where('id',1)->first();

        $request->validate([
            'banner_title' => 'required'
        ]);

        if($request->hasFile('banner_photo')) {
            $request->validate([
                'banner_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->banner_photo));

            $ext = $request->file('banner_photo')->extension();
            $final_name = 'home_banner'.time().'.' . $ext;

            $request->file('banner_photo')->move(public_path('uploads/'),$final_name);

            $page_data->banner_photo = $final_name;
        }

        $page_data->banner_title = $request->banner_title;
        $page_data->banner_description = $request->banner_description;
        $page_data->banner_button_text = $request->banner_button_text;
        $page_data->banner_button_url = $request->banner_button_url;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }



    /*home info*/

    public function info()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_info_show', compact('page_data'));
    }

    public function info_update(Request $request)
    {
        $page_data = HomePageItem::where('id',1)->first();

        $request->validate([
            'info_title' => 'required'
        ]);

        if($request->hasFile('info_photo')) {
            $request->validate([
                'info_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->info_photo));

            $ext = $request->file('info_photo')->extension();
            $final_name = 'home_info'.time().'.' . $ext;

            $request->file('info_photo')->move(public_path('uploads/'),$final_name);

            $page_data->info_photo = $final_name;
        }

        $page_data->info_title = $request->info_title;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }


}
