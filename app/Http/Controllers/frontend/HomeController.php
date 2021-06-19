<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\auth\LoginService;
use App\Services\frontend\feHotel\RoomService;
use App\Services\frontend\feHotel\ServicesService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
        // Hàm khởi tạo
    }

    public function index(Request $request)
    {
        //  Rooms
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listroom(3);

        //  Services
        $listservice     = new ServicesService;
        $viewListService = $listservice->listservice();
        $viewListServiceSlider = $listservice->listserviceslider();

        $tennguoidung = "";
        if (Auth::check())
        {
            $id = Auth::id();
            $checklogin = new LoginService;
            $checkuser = $checklogin->checkUserByUserId($id);
            $request->session()->put('tennguoidung', $checkuser->name);
        }

        return view('feHotel.pages.home', [
            'title'             => TITLE_FRONTEND_INDEX,

            'listroom'          => $viewListRoom,
            'listservice'       => $viewListService,
            'listserviceslider' => $viewListServiceSlider,
            'tennguoidung' => $tennguoidung
        ]);
    }

    public function about(Request $request)
    {
        //  Services
        $listservice     = new ServicesService;
        $viewListService = $listservice->listservice();

        return view('feHotel.pages.about', [
            'title' => TITLE_FRONTEND_INDEX,

            'listservice' => $viewListService,
        ]);
    }

    public function contact()
    {
        //  Services
        $listservice     = new ServicesService;
        $viewListService = $listservice->listservice();

        return view('feHotel.pages.contact', [
            'title'         => TITLE_FRONTEND_INDEX,

            'listservice'   => $viewListService,
        ]);
    }

    public function search()
    {

    }
}
