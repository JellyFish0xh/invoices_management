<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $table = 'Stocks';
    public $timestamps = true;

    public function stocks()
    {
        return $this->hasMany('App\Models\Product', 'stock_id');
    }

    public function bills()
    {
        return $this->hasMany('App\Models\Bill', 'stock_id');
    }

}
