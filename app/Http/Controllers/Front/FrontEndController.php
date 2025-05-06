<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomePageItem;
class FrontEndController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('front.home',compact('page_data'));
    }
}
