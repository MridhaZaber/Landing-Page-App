<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomePageItem;
use App\Models\Info;
class FrontEndController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id',1)->first();
        $infos = Info::orderBy('id','asc')->get();

        return view('front.home',compact('page_data','infos'));
    }
}
