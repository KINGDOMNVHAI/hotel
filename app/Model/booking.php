<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'booking';

    public $timestamps=false;

    protected $fillable=['idbooking','fullname','email','phone'
    ,'maphong','tenphong','tenloaiphong'
    ,'gialoaiphong','fromdate', 'todate','night'];
}
