<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\AdminServiceCategory;
use App\Models\WhyChoose;
use App\Models\WhyChooseSectionUpdate;
use App\Models\Stat;
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
        $whychooseupdate = WhyChooseSectionUpdate::where('id',1)->first();
        $stat=Stat::where('id',1)->first();
        return view('front.home',compact('page_data','services_data','service_categories','infos','whychooseupdate','stat'));


    }
}
