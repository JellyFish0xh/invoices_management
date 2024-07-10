<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'Products';
    public $timestamps = true;

    public function products()
    {
        return $this->belongsTo('App\Models\Supplier', 'id');
    }

    public function ProductsStock()
    {
        return $this->belongsTo('App\Models\Stock', 'id');
    }

}
