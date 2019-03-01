<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function addresses()
    {
      return $this->hasMany('App\Address');
    }

    public function products()
    {
      return $this->belongsToMany('App\Product','DetailSales')->withPivot('sale_id','price','quantity');
    }
}
