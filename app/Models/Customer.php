<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'Customers';
    public $timestamps = true;

    public function bills()
    {
        return $this->hasMany('App\Models\Bill', 'customer_id');
    }

    public function collections()
    {
        return $this->hasMany('App\Models\Collection', 'customer_id');
    }

}
