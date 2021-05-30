<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\auth\LoginService;
use App\Services\frontend\feHotel\BookingService;
use App\Services\frontend\feHotel\RoomService;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if (Auth::check())
        {
            $id = Auth::id();
            $checklogin = new LoginService;
            $userinfo = $checklogin->checkUserByUserId($id);

            return view('backend.pages.profile', [
                'title' => TITLE_FRONTEND_INDEX,
                'userinfo' => $userinfo
            ]);
        }
        else
        {
            return redirect('login');
        }
    }
}
