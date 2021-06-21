<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Post;
use App\Services\all\ListPostService;
use App\Services\backend\PostService;
use App\Services\frontend\feHotel\RoomService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function listroom(Request $request) //nằm trong master-backend.blade cho tìm kiếm
    {
        if (Auth::check()) //Auth::check() kiểm tra đăng nhập chưa
        {
            $username = Auth::user()->username; //lấy thông tin hiện tại của user vừa đăng nhập

            $datas = [
                'keyword' => $request->keyword,
                'loaiphong' => $request->loaiphong,
            ];

            // Public Services
            $listroom     = new RoomService;
            $viewListRoom = $listroom->listRoomHavePaginate(10, $datas); //thực hiện function listRoomHavePaginate của RoomService

            return view('backend.pages.list-room', [ //sau khi thực hiện xong, thì trả về kết quả ở view của backend.pages.listroom
                'title'     => TITLE_FRONTEND_INDEX,

                'username'  => $username, //trả về user vừa nhập xong
                'listroom'  => $viewListRoom, //trả về danh sách kết quả theo kết quả tìm kiếm
            ]);
        }
        else {
            return redirect('login');
        }
    }

    public function createroom(Request $request)
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Luôn luôn trong trạng thái lấy data từ các input trong form dù có search hay không
            $request = Request::capture();

            if ($request->isMethod('POST'))
            {
                $room   = new RoomService;
                $viewData = $room->create($request);

                return redirect('list-room');
            }
            return view('backend.pages.create-post', [
                'title'     => TITLE_FRONTEND_INDEX,
                'username'  => $username,
            ]);
        }
        else {
            return redirect('login');
        }
    }

    public function update($idRoom)
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Get title from parent class
            $title = "List Room";

            $room = new RoomService;
            $viewRoom = $room->detailroom($idRoom);

            return view('backend.pages.edit-post', [
                'title'     => $title,
                'room'      => $viewRoom,
                'username'  => $username,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function edit($idRoom, Request $request)
    {
        $room = new RoomService;
        $viewRoom = $room->editroom($idRoom, $request);

        return redirect('list-room');
    }

    public function delete($urlPost)
    {
        if (Auth::check())
        {
            $room = new RoomService;
            $viewRoom = $room->deleteroom($urlPost);

            return redirect('list-room');
        }
        else {
            return redirect()->route('login');
        }
    }
}
