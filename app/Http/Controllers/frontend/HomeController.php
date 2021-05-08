<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\RoomService;
use App\Services\frontend\feHotel\ServicesService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        //  Rooms
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listroom(3);

        //  Services
        $listservice     = new ServicesService;
        $viewListService = $listservice->listservice();
        $viewListServiceSlider = $listservice->listserviceslider();

        return view('feHotel.pages.home', [
            'title'             => TITLE_FRONTEND_INDEX,

            'listroom'          => $viewListRoom,
            'listservice'       => $viewListService,
            'listserviceslider' => $viewListServiceSlider,
        ]);
    }

    public function about()
    {
        //  Services
        $listservice     = new ServicesService;
        $viewListService = $listservice->listservice();

        return view('feHotel.pages.about', [
            'title' => TITLE_FRONTEND_INDEX,

            'listservice'       => $viewListService,
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
}
