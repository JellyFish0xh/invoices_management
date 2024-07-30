<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'Products';
    protected $fillable = [
        'name',
        'category_id',
        'sell_price',
        'buy_price',
    ];
    public $timestamps = true;

    public function Supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'id');
    }
    public function Category()
    {
        return $this->belongsTo('App\Models\category', 'category_id');
    }
    public function getCategoryNameAttribute(){
        return $this->category->name;
      }

    public function ProductsStock()
    {
        return $this->belongsTo('App\Models\Stock', 'id');
    }

}
