<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\backend\BookingService;
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

    public function listbooking(Request $request)
    {
        if (Auth::check())
        {
            $booking = new BookingService;
            $viewBooking = $booking->listBookingHavePagination(20);
            dd($viewBooking);

            return view('backend.pages.list-booking', [
                'title' => TITLE_FRONTEND_INDEX,
                'listbooking' => $viewBooking
            ]);
        }
        else
        {
            return redirect('login');
        }
    }
}
