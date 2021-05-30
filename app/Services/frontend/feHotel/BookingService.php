<?php
namespace App\Services\frontend\feHotel;

use App\Model\booking;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class BookingService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getPrice($urlroom)
    {
        $query = DB::table('phong')
            ->join('loaiphong', 'phong.urlloaiphong', '=', 'loaiphong.urlloaiphong')
            ->select(
                'phong.maphong as maphong',
                'phong.urlloaiphong as urlloaiphong',
                'phong.gacxep as gacxep',
                'phong.tenphong as tenphong',
                'phong.mota',
                'phong.thumbnailphong',
                'phong.noidung',
                'loaiphong.tenloaiphong as tenloaiphong',
                'loaiphong.gialoaiphong as gialoaiphong'
            )
            ->where('phong.enablephong', '=', 1)
            ->where('loaiphong.urlloaiphong', '=', $urlroom)
            ->first();

        return $query;
    }

    public function create($request)
    {
        $numberofdate = $request->session()->get('numberofdate');
        $fromdate = $request->session()->get('fromdate');
        $todate = $request->session()->get('todate');

        $booking = $this->getPrice($request->input('urlloaiphong'));
        $priceroom = $booking->gialoaiphong;
        $maphong = $request->maphong;
        $tenloaiphong = $booking->tenloaiphong;
        $tenphong = $request->tenphong;
        $total = $priceroom * $numberofdate;

        $query = booking::create([
            'fullname'      => $request->input('fullname'),
            'email'         => $request->input('email'),
            'phone'         => $request->input('phone'),
            'maphong'       => $maphong,
            'tenphong'      => $tenphong,
            'tenloaiphong'  => $tenloaiphong,
            'gialoaiphong'  => $total,
            'fromdate'      => date("Y-m-d", strtotime($fromdate)),
            'todate'        => date("Y-m-d", strtotime($todate)),
            'night'         => $numberofdate,
        ]);

        return $query;
    }
}
