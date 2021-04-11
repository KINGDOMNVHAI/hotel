<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\RoomService;
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
        // Public Services
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listroom();

        return view('feHotel.pages.home', [
            'title'     => TITLE_FRONTEND_INDEX,

            'listroom'  => $viewListRoom,
        ]);
    }

    // public function about()
    // {
    //     return view('feHotel.pages.about', [
    //         'title' => TITLE_FRONTEND_INDEX,

    //         'darkskyAPI' => $this->darkskyAPI,
    //     ]);
    // }

    // public function contact()
    // {
    //     return view('feHotel.pages.contact', [
    //         'title' => TITLE_FRONTEND_INDEX,

    //         'darkskyAPI' => $this->darkskyAPI,
    //     ]);
    // }
}
