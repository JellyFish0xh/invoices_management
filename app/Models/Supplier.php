<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    protected $table = 'Suppliers';
    public $timestamps = true;
    protected $fillable=["name","contact_details"];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'id');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment', 'id');
    }

}
