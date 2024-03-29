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
            ->join('loaiphong', 'phong.urlloaiphong', '=', 'loaiphong.urlloaiphong')
            ->select(
                'phong.maphong', 'phong.tenphong'
                ,'phong.kichthuoc','phong.mota','phong.noidung'
                ,'phong.urlloaiphong','phong.phongnoibat','phong.thumbnailphong'
                ,'loaiphong.gialoaiphong', 'loaiphong.urlloaiphong'
            )
            ->where('phong.enablephong', '=', 1)
            ->where('phong.maphong', '=', $idRoom)
            ->first();
        return $query;
    }

    public function listRoomHavePaginate($limit, $datas) //cũng dùng cho function listroom trong RoomControll
    {
        $query = DB::table('phong')
            ->join('loaiphong', 'phong.urlloaiphong', '=', 'loaiphong.urlloaiphong')
            ->select(
                'phong.maphong',
                'phong.urlloaiphong as urlloaiphong',
                'phong.gacxep as gacxep',
                'phong.tenphong as tenphong',
                'phong.mota',
                'phong.thumbnailphong', //thumnail là hình đại diện của phòng
                'phong.noidung',
                'loaiphong.tenloaiphong as tenloaiphong',
                'loaiphong.gialoaiphong as gialoaiphong'
            )
            ->where('enablephong', '=', 1); //enable là kích hoạt, dùng khi xóa phòng, nếu cần xóa phòng thì enable lúc này = 1

        if ($datas['loaiphong'] != null) { //kiểm tra loại phòng
            if ($datas['loaiphong'] == 'phong-co-gac') {
                $query = $query->where('phong.gacxep', '=', true);
                //áp dụng một câu lệnh where khi có giá trị tìm kiếm thuộc phòng có gác
            } else if ($datas['loaiphong'] == 'phong-khong-co-gac') {
                $query = $query->where('phong.gacxep', '=', false);
                //áp dụng một câu lệnh where khi có giá trị tìm kiếm thuộc phòng không có gác
            }
        }

        $query = $query->where('phong.tenphong', 'like', "%{$datas['keyword']}%") //WHERE phong.tenphong like %keyword%
            ->paginate($limit);//Tìm bất kỳ giá trị nào có từ "keyword" ở bất kỳ vị trí nào

        return $query;
    }

    /**
     * Get random room
     */
    public function listRandomRoom($limit)
    {
        $query = DB::table('phong')
            ->join('loaiphong', 'phong.urlloaiphong', '=', 'loaiphong.urlloaiphong')
            ->select(
                'phong.maphong',
                'phong.urlloaiphong as urlloaiphong',
                'phong.gacxep as gacxep',
                'phong.tenphong as tenphong',
                'phong.mota',
                'phong.thumbnailphong',
                'phong.noidung',
                'loaiphong.tenloaiphong as tenloaiphong',
                'loaiphong.gialoaiphong as gialoaiphong'
            )
            ->where('enablephong', '=', 1)
            ->orderBy(DB::raw('RAND()'))
            ->take($limit)
            ->get();

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
            'mota'      => $request->present,
            'noidung'   => $request->content,
            // 'date_post' => date("Y-m-d"),
            'urlloaiphong' => PHONG_DON,
            'gacxep' => false,
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
