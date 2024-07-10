<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_Product extends Model 
{

    protected $table = 'Bill_Product';
    public $timestamps = true;

    public function bill()
    {
        return $this->belongsTo('Bill', 'id');
    }

}