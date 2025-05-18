<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    //
     public function stat()
    {
       
        
        $page_data = Stat::where('id',1)->first();
        return view('admin.stat_show', compact('page_data'));
    }

     public function stat_update(Request $request)
    {
        $page_data = Stat::where('id',1)->first();

        $request->validate([
            'stat1_title' => 'required'
        ]);

        if($request->hasFile('background')) {
            $request->validate([
                'background' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->background));

            $ext = $request->file('background')->extension();
            $final_name = 'stat_background'.time().'.' . $ext;

            $request->file('background')->move(public_path('uploads/'),$final_name);

            $page_data->background = $final_name;
        }

        $page_data->stat1_title = $request->stat1_title;
        $page_data->stat1_number = $request->stat1_number;
        $page_data->stat2_title = $request->stat2_title;
        $page_data->stat2_number = $request->stat2_number;
        $page_data->stat3_title = $request->stat3_title;
        $page_data->stat3_number = $request->stat3_number;
        $page_data->stat4_title = $request->stat4_title;
        $page_data->stat4_number = $request->stat4_number;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');

    }




}
