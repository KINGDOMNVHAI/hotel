<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\BookingService;
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

    public function index()
    {
        //  Rooms
        // $listroom     = new RoomService;
        // $viewListRoom = $listroom->listroom(3);

        return view('feHotel.pages.booking-form', [
            'title' => TITLE_FRONTEND_INDEX
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
        $priceroom = $viewRoom->gialoaiphong;

        $numbernight = $request->input('numbernight');

        $bookingdate = $request->input('bookingdate');
        $date = explode(" - ", $bookingdate);
        $fromdate = $date[0];
        $todate = $date[1];

        $total = $priceroom * $numbernight;

        // $sessions = Session::put($booking, [[
        //     'fullname' => $fullname,
        //     'email' => $email,
        //     'phone' => $phone,
        //     'priceroom' => $priceroom,
        //     'fromdate' => $fromdate,
        //     'todate' => $todate,
        // ]]);

        $request->session()->put('fullname', $fullname);
        $request->session()->put('email', $email);
        $request->session()->put('phone', $phone);
        $request->session()->put('nameroom', $nameroom);
        $request->session()->put('priceroom', $priceroom);
        $request->session()->put('numbernight', $numbernight);
        $request->session()->put('fromdate', $fromdate);
        $request->session()->put('todate', $todate);

        // session(['danhsach' => $danhsach]);

        if ($request->session()->has('total')) {
            var_dump('exist');
            $total = $total + $request->session()->get('total');
        }

        $request->session()->put('total', $total);

        // var_dump($request->session()->get('total'));
        // dd($request->session()->get('danhsach', $danhsach));

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
