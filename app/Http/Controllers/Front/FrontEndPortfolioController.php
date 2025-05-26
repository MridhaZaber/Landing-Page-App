<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Admin\ProtfolioCategoryController;
use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use App\Models\PortfolioCategory;
use App\Models\Protfolio;;


use Illuminate\Http\Request;

class FrontEndPortfolioController extends Controller
{
    //

    public function index(){
         $page_data = HomePageItem::where('id',1)->first();
         $portfolios = Protfolio::orderBy('id','asc')->get();
         $portfolio_categories = PortfolioCategory::orderBy('id','asc')->get();
        return view('front.portfolio' ,compact('page_data','portfolios','portfolio_categories'));
    }
}
