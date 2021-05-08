<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\frontend\feHotel\RoomService;
use App\Services\frontend\feHotel\ServicesService;
use App\Services\all\ListPostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function listroom($urlListRoom)
    {
        $service     = new ServicesService;
        $viewListService = $service->listservice();

        // Public Services
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listRoomHavePaginate(20, $urlListRoom);

        return view('feHotel.pages.listroom', [
            'title'         => TITLE_FRONTEND_INDEX,

            'listroom'      => $viewListRoom,
            'listservice'   => $viewListService,
        ]);
    }

    public function room($idRoom)
    {
        $service     = new ServicesService;
        $viewListService = $service->listservice();

        // Public Services
        $detailroom     = new RoomService;
        $viewDetailRoom = $detailroom->detailroom($idRoom);

        return view('feHotel.pages.room', [
            'title'      => TITLE_FRONTEND_INDEX,

            'detailroom' => $viewDetailRoom,
            'listservice'   => $viewListService,
        ]);
    }
}
