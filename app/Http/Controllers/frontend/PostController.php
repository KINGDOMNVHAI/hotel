<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\RoomService;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function blog()
    {
        // Public Services
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listroom(12);

        return view('feHotel.pages.blog', [
            'title'     => TITLE_FRONTEND_INDEX,

            'listroom'  => $viewListRoom,
        ]);
    }
}
