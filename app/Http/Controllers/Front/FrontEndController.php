<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\AdminServiceCategory;
use Illuminate\Http\Request;

use App\Models\HomePageItem;
use App\Models\Info;
class FrontEndController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id',1)->first();

        $services_data = Service::where('id',1)->first();
        $service_categories = AdminServiceCategory::orderBy('id','asc')->get();
        $infos = Info::orderBy('id','asc')->get();
        return view('front.home',compact('page_data','services_data','service_categories','infos'));


    }
}
