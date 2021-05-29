<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\auth\LoginService;
use App\Services\frontend\feHotel\BookingService;
use App\Services\frontend\feHotel\RoomService;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\FirstEmail;

class BookingController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $viewDetailRoom = null;
        $checkuser = null;
        if ($request->session()->exists('maphong'))
        {
            $maphong = $request->session()->get('maphong');
            $detailroom     = new RoomService;
            $viewDetailRoom = $detailroom->detailroom($maphong);
        }

        if (Auth::check())
        {
            $id = Auth::id();
            $checklogin = new LoginService;
            $checkuser = $checklogin->checkUserByUserId($id);
        }

        return view('feHotel.pages.booking-form', [
            'title' => TITLE_FRONTEND_INDEX,
            'viewDetailRoom' => $viewDetailRoom,
            'user' => $checkuser
        ]);
    }

    public function check(Request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $nameroom = $request->input('nameroom');

        $room     = new BookingService;
        $viewRoom = $room->getPrice($nameroom);
        $priceroom = $viewRoom['gialoaiphong'];

        $bookingdate = $request->input('bookingdate');
        $date = explode(" - ", $bookingdate);
        $fromdate = $date[0];
        $todate = $date[1];
        $var1 = strtotime($fromdate);
        $var2 = strtotime($todate);
        // Use for loop to store dates into array
        // 86400 sec = 24 hrs = 60*60*24 = 1 day
        $numberofdate = [];
        for ($currentDate = $var1;
            $currentDate <= $var2;
            $currentDate += (86400)) {

            $store = date('Y-m-d', $currentDate);
            $numberofdate[] = $store;
        }

        $total = $priceroom * count($numberofdate);
        $request->session()->put('fullname', $fullname);
        $request->session()->put('email', $email);
        $request->session()->put('phone', $phone);
        $request->session()->put('nameroom', $nameroom);
        $request->session()->put('priceroom', $priceroom);
        $request->session()->put('numberofdate', count($numberofdate));
        $request->session()->put('fromdate', $fromdate);
        $request->session()->put('todate', $todate);
        $request->session()->put('bookingdate', $bookingdate);
        $request->session()->put('fromdate', $fromdate);
        $request->session()->put('todate', $todate);

        if ($request->session()->has('total')) {
            $total = $total + $request->session()->get('total');
        }

        $request->session()->put('total', $total);

        return view('feHotel.pages.booking-check', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function final(Request $request)
    {
        $room     = new BookingService;
        $viewRoom = $room->create($request);

        $to_email = $request->email;

        Mail::to($to_email)->send(new FirstEmail);

        $request->session()->forget(['fullname', 'email', 'phone', 'nameroom', 'priceroom', 'numbernight', 'fromdate', 'todate']);

        return view('feHotel.pages.booking-final', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

}
