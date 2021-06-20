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

        $datas = [
            'keyword' => '',
            'loaiphong' => $urlListRoom,
        ];

        // Public Services
        $listroom     = new RoomService;
        $viewListRoom = $listroom->listRoomHavePaginate(10, $datas);

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
        $randomRoom = $detailroom->listRandomRoom(3);

        return view('feHotel.pages.room', [
            'title'       => TITLE_FRONTEND_INDEX,

            'detailroom'  => $viewDetailRoom,
            'listservice' => $viewListService,
            'randomRoom'  => $randomRoom,
        ]);
    }

    public function searchroom(Request $request) // thong tin nguoi dung gui vao
    {
        $room     = new RoomService;
        //lay tu listRoomHavePaginate
        //loaiphong lay tu home.blade.php cua name="keyword"
        //keyword tuongtu

        $datas = [
            'keyword' => $request->keyword,
            'loaiphong' => $request->loaiphong,
        ];
        $viewRoom = $room->listRoomHavePaginate(20, $datas);

        return view('feHotel.pages.listroom', [ // sau khi chay viewRoom xong thi tra ve return
            'title'    => TITLE_FRONTEND_INDEX, // ten tab tren trinh duyet
            'listroom' => $viewRoom,
        ]);
    }

    public function bookRoom(Request $request)
    {
        // sau khi đăng nhập, dùng maphong này để tìm ra phòng
        $request->session()->put('maphong', $request->maphong);
        if (Auth::check())
        {
            var_dump('auth');
            $detailroom     = new RoomService;
            $viewDetailRoom = $detailroom->detailroom($request->maphong);
            return redirect()->route('booking-form-fe');
        }
        else
        {
            $request->session()->put('messageWarning', "Bạn cần đăng nhập trước khi tạo phòng");
            return redirect()->back();
        }
    }
}
