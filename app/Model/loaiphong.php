<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class loaiphong extends Model
{
    public $timestamps=false;

    protected $fillable=['maloaiphong','tenloaiphong','dongia'];
}
