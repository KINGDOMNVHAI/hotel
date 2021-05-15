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
        // ORM Laravel
        $query = DB::table('loaiphong')
            ->select(
                'maloaiphong', 'urlloaiphong', 'tenloaiphong', 'gialoaiphong'
            )
            ->where('urlloaiphong', '=', $urlroom)
            ->first();

        return $query;
    }

    public function create($request)
    {
        $bookingdate = $request->input('bookingdate');
        $date = explode(" - ", $bookingdate);
        $fromdate = $date[0];
        $todate = $date[1];

        $booking = $this->getPrice($request->input('nameroom'));
        $priceroom = $booking->gialoaiphong;
        $nameroom = $booking->tenloaiphong;
        $numbernight = $request->input('numbernight');
        $total = $priceroom * $numbernight;

        $query = booking::create([
            'fullname'  => $request->input('fullname'),
            'email'     => $request->input('email'),
            'phone'     => $request->input('phone'),
            'room'      => $nameroom,
            'giaphong'  => $total,
            'fromdate'  => date("Y-m-d", strtotime($fromdate)),
            'todate'    => date("Y-m-d", strtotime($todate)),
            'night'     => $request->input('numbernight'),
        ]);

        return $query;
    }
}
