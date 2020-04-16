<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentBaiviet extends Model
{
    protected $table = 'comment_baiviet';

    public function baiviet()
    {
        return $this->belongsTo('App\Baiviet','id_baiviet','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_user','id');
    }
}
