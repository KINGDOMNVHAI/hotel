<?php
namespace App\Services\frontend\feHotel;

use App\Model\phong;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RoomService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @return void
     */
    public function listroom($limit)
    {
        // ORM Laravel
        $query = DB::table('phong')
            ->where('enablephong', '=', 1)
            ->limit($limit)
            ->get();

        return $query;
    }

    public function detailroom($idRoom)
    {
        $query = DB::table('phong')
            ->select(
                'maphong', 'tenphong'
                ,'kichthuoc','mota','noidung', 'giaphong'
                ,'urlloaigiuong','phongnoibat','thumbnailphong'
            )
            ->where('enablephong', '=', 1)
            ->where('maphong', '=', $idRoom)
            ->first();

        return $query;
    }

    public function listRoomHavePaginate($limit, $urlListRoom, $keyword)
    {
        $giuongdon = PHONG_DON;
        $giuongdoi = PHONG_DOI;
        $haigiuongdon = HAI_GIUONG_DON;
        $haigiuongdoi = HAI_GIUONG_DOI;
        // $giuongtang = GIUONG_TANG;

        $query = DB::table('phong')
            ->where('enablephong', '=', 1);

        if ($urlListRoom == 'all') {
            $query = $query;
        } else if ($urlListRoom == $giuongdon) {
            $query = $query->where('urlloaigiuong', '=', $giuongdon);
        } else if ($urlListRoom == $giuongdoi) {
            $query = $query->where('urlloaigiuong', '=', $giuongdoi);
        } else if ($urlListRoom == $haigiuongdon) {
            $query = $query->where('urlloaigiuong', '=', $haigiuongdon);
        } else if ($urlListRoom == $haigiuongdoi) {
            $query = $query->where('urlloaigiuong', '=', $haigiuongdoi);
            // $query = $query->where('urlloaigiuong', '=', $giuongtang);
        } else {

        }

        if ($urlListRoom = 'phong-co-gac') {
            $query = $query->where('gacxep', '=', true);
        } else if ($urlListRoom = 'phong-khong-co-gac') {
            $query = $query->where('gacxep', '=', false);
        }

        $query = $query->where('tenphong', 'like', "%{$keyword}%")
            ->paginate($limit);

        return $query;
    }

    public function create($request)
    {
        $namefile = '';
        //Kiểm tra input có lựa chọn file nào để upload chưa
        if ($request->hasFile('thumbnail'))
        {
            // Xem tất cả thuộc tính của file
            $input = $request->all();

            $file = $request->file('thumbnail'); // Lấy file từ form
            $input['file'] = $file->getClientOriginalName(); // Tên file
            $file->move(public_path('upload\rooms\deluxe'),$file->getClientOriginalName()); // Di chuyển file đến public/upload
            $namefile = $input['file'];
        }

        $query = phong::insert([
            'tenphong'  => $request->name,
            'kichthuoc' => $request->size,
            'giaphong'  => $request->price,
            'mota'      => $request->present,
            'noidung'   => $request->content,
            // 'date_post' => date("Y-m-d"),
            'maloaiphong' => 1,
            'thumbnailphong' => $namefile, // Lấy tên file,
        ]);

        return $query;
    }

    public function editroom($idRoom, $request)
    {
        $namefile = $request->thumbnailphong;

        //Kiểm tra input có lựa chọn file nào để upload chưa
        if ($request->hasFile('thumbnail'))
        {
            // Xem tất cả thuộc tính của file
            $input = $request->all();

            $file = $request->file('thumbnail'); // Lấy file từ form
            $input['file'] = $file->getClientOriginalName(); // Tên file
            $file->move(public_path('upload\rooms\deluxe'),$file->getClientOriginalName()); // Di chuyển file đến public/upload
            $namefile = $input['file'];
        }

        $query = DB::table('phong')
            ->where('enablephong', '=', 1)
            ->where('maphong', '=', $idRoom)
            ->update([
                'tenphong'  => $request->name,
                'noidung'   => $request->content,
                'thumbnailphong' => $namefile, // Lấy tên file,
            ]);

        return $query;
    }

    public function deleteroom($idRoom)
    {
        $query = DB::table('phong')
            ->where('maphong', '=', $idRoom)
            ->update([
                'enablephong'   => 0,
            ]);

        return $query;
    }
}
