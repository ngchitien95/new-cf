<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    use SoftDeletes;
    protected $table = "customer";

    public function bills(){
        return $this->hasMany('App\Bill','customer_id','id');
    }
}
