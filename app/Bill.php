<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    use SoftDeletes;

    protected $table = "bills";

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function customer(){
        return $this->belongsTo('App\Customer','customer_id','id');
    }
}
