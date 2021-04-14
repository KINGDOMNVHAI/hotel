<?php
namespace App\Services\frontend\feHotel;

use App\Model\phong;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RoomService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @return void
     */
    public function listroom($limit)
    {
        // ORM Laravel
        $query = DB::table('phong')
            ->where('enablephong', '=', 1)
            ->limit($limit)
            ->get();

        return $query;
    }

    public function detailroom($idRoom)
    {
        $query = DB::table('phong')
            ->select(
                'maphong', 'tenphong'
                ,'kichthuoc','mota','noidung', 'giaphong'
                ,'maloaiphong','phongnoibat','thumbnailphong'
            )
            ->where('enablephong', '=', 1)
            ->where('maphong', '=', $idRoom)
            ->first();

        return $query;
    }

    public function listRoomHavePaginate($limit, $urlListRoom)
    {
        $query = DB::table('phong')
            ->where('enablephong', '=', 1);

        if ($urlListRoom == 'all') {
            $query = $query;
        } else if ($urlListRoom = 'single') {
            $query = $query->where('maloaiphong', '=', SINGLE);
        } else if ($urlListRoom = 'double') {
            $query = $query->where('maloaiphong', '=', DOUBLE);
        } else if ($urlListRoom = 'deluxe') {
            $query = $query->where('maloaiphong', '=', DELUXE);
        } else {

        }

        $query = $query->paginate($limit);

        return $query;
    }
}
