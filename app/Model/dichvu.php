<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    protected $table = 'dichvu';

    public $timestamps=false;

    protected $fillable=['madichvu','tendichvu','motadichvu','hinhanh','trangchu','enabledichvu', 'enabletrangchu'];
}
