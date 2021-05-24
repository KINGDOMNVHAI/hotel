<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phanquyen extends Model
{
    protected $table = 'phanquyen';

    public $timestamps = false;

    protected $fillable = ['idphanquyen','tenphanquyen'];
}
