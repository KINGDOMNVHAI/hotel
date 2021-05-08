<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class loaigiuong extends Model
{
    protected $table = 'loaigiuong';

    public $timestamps=false;

    protected $fillable=[
        'maloaigiuong','tenloaigiuong','urlloaigiuong'
    ];
}
