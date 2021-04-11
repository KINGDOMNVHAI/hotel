<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    public $timestamps=false;

    protected $fillable=['iddichvu','tendichvu','giadichvu'];
}
