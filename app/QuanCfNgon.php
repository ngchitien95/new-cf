<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuanCfNgon extends Model
{
    use SoftDeletes;

    protected $table = "quancfngon";
}
