<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaiViet extends Model
{
    use SoftDeletes;
    protected $table = "baiviet";

    public function commentBaiviet(){
        return $this->hasMany('App\CommentBaiviet', 'id_baiviet','id');
    }
}
