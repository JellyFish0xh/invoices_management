<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starting_quantity extends Model 
{

    protected $table = 'Starting_quantities';
    public $timestamps = true;

    public function products()
    {
        return $this->hasOne('Product', 'id');
    }

    public function stock()
    {
        return $this->hasOne('Stock', 'id');
    }

}