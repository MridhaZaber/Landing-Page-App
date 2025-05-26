<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\Protfolio;
use Illuminate\Http\Request;


class ProtfolioController extends Controller
{
    //

    
    public function index()
    {
        $all_data = Protfolio::with('rportfoliocategory')->orderBy('id','asc')->get();
        return view('admin.protfolio_show', compact('all_data'));
    }

    public function add()
    {
        $portfolio_categories = PortfolioCategory::get();
        return view('admin.protfolio_add',compact('portfolio_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subtitle'=>'required',
            
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Protfolio();

        $ext = $request->file('photo')->extension();
        $final_name = 'protfolio_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;
        
        $obj->subtitle = $request->subtitle;
        $obj->title = $request->title;
        $obj->portfolio_category_id = $request->portfolio_category_id;

        $obj->save();

        return redirect()->route('admin_protfolio_show')->with('success', 'Data is inserted successfully.');
    }

    public function edit($id)
    {
        $row_data = Protfolio::where('id',$id)->first();
        $portfolio_categories = PortfolioCategory::get();
        return view('admin.protfolio_edit',compact('row_data','portfolio_categories'));
    }

    
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            
        ]);

        $obj = Protfolio::where('id',$id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'protfolio_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->title = $request->title;
        $obj->subtitle = $request->subtitle;
        $obj->portfolio_category_id = $request->portfolio_category_id;
        
        $obj->update();

        return redirect()->route('admin_protfolio_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $row_data = Protfolio::where('id',$id)->first();
        unlink(public_path('uploads/'.$row_data->photo));
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }



}
