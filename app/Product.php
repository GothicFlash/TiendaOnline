<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Category;
use App\Offer;

class Product extends Model
{
    public $timestamps = false;
    public function images()
    {
      return $this->hasMany('App\Image');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function sales()
    {
      return $this->belongsToMany('App\Sale','DetailSales')->withPivot('product_id','price','quantity');
    }
}
