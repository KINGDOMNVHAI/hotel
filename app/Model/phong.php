<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    protected $table = 'phong';

    public $timestamps=false;

    protected $fillable=['maphong'
    ,'tenphong','kichthuoc'
    // ,'thoigian'
    ,'maloaiphong','phongnoibat','thumbnailphong'];
}
