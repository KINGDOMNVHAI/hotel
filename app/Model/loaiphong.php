<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class loaiphong extends Model
{
    protected $table = 'loaiphong';

    public $timestamps = false;

    protected $fillable = ['maloaiphong','tenloaiphong','urlloaiphong','gialoaiphong'];
}
