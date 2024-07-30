<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock_Product extends Model 
{

    protected $table = 'Stock_Product';
    public $timestamps = true;
    protected $fillable = [
        'product_id',
        'stock_id',
        'Base_Quantity',
    ];

    public function stock()
    {
        return $this->hasOne('App\Models\Stock', 'id');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Supplier', 'id');
    }

}