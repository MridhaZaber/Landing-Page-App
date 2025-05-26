<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protfolio extends Model
{
    //
    public function rportfoliocategory(){
        return $this->belongsTo(PortfolioCategory::class,'portfolio_category_id');
    }

}
